@extends('aplicacion/app')

@section('content')
	@include('backend.contactos.form_contactos',['metodo' => 'POST',
									  'titulo' => 'CONTACTO',
									  'accion' => ['ContactosController@enviar_consulta'],
									  'boton' => 'ENVIAR MENSAJE',
									  'cancelar' => 'ContactosController@index',
	])
@endsection