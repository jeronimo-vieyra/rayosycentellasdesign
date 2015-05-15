@extends('aplicacion/app')

@section('content')
	
			<div class="col-md-2 col-md-offset-8">
				<a href="{{ action('UsuariosController@cambiar_contra', [$usuario->id]) }}" class="btn btn-primary">Cambiar contraseña</a>
			</div>

	@include('backend.usuarios.form_usuario',['metodo' => 'PATCH',
									  'titulo' => 'Perfil de usuario',
									  'accion' => ['UsuariosController@update', $usuario->id],
									  'boton' => 'Guardar',
									  'cancelar' => 'UsuariosController@index',
	])

@endsection