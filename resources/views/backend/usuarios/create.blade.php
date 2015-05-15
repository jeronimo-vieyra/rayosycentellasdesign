@extends('aplicacion/app')

@section('content')

	@include('backend.usuarios.form_usuario',['metodo' => 'POST',
									  'titulo' => 'Nuevo Usuario',
									  'accion' => ['UsuariosController@store'],
									  'boton' => 'Crear',
									  'cancelar' => 'UsuariosController@index',
	])

@endsection