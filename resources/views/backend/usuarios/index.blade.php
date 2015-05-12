@extends('aplicacion/app')

@section('content')

<div class="col-md-8 col-md-offset-2">
	
	<a class="pull-right" title="Nuevo usuario" href="{{ action('UsuariosController@create') }}"><h5 class="derecha">NUEVO</h5></a>

	<table class="tabla table-responsive table table-hover table-condensed">
		<thead>
	        <tr>
	        	<th></th>
	        	<th>Usuario</th>
				<th>Nombre y apellido</th>
				<th>Email</th>
				<th class="text-center">¿Habilidado?</th>
				<th class="text-center">Acciones</th>
	        </tr>
	    </thead>
	    <tbody>
	    @foreach($usuarios as $usuario)
	        <tr>
	        	<td> 
	        		@if ($usuario->estado == 2)						    
						<span title="Usuario Pendiente" class="glyphicon glyphicon-alert"></span>
					@endif
	        	</td>
				<td>{{$usuario->username}}</td>
				<td>{{$usuario}}</td>
				<td>{{$usuario->email}}</td>
				<td class="text-center">
					@if ($usuario->estado == 1)
						 <!-- Activo -->
						<a title="Desactivar" href="{{ action('UsuariosController@desactivar', [$usuario->id]) }}" data-method="patch" data-title="Activación de usuario" data-confirm="¿Esta seguro que desea desactivar al usuario '{{$usuario->username}}'?"> <span class="glyphicon glyphicon-ok-sign"></span> </a>
					@elseif ($usuario->estado == 0)
					     <!-- Desactivado -->						    
						<a title="Activar" href="{{ action('UsuariosController@activar', [$usuario->id]) }}" data-method="patch" data-title="Activación de usuario" data-confirm="¿Esta seguro que desea activar al usuario '{{$usuario->username}}'?"> <span class="glyphicon glyphicon-remove-sign"></span> </a>
					@elseif ($usuario->estado == 2)
					     <!-- Pendiente -->						    
						<a title="Activar Pendiente" href="{{ action('UsuariosController@activar_pendiente', [$usuario->id]) }}" data-method="patch" data-title="Activación de usuario" data-confirm="¿Esta seguro que desea activar al usuario '{{$usuario->username}}'?"> <span class="glyphicon glyphicon-remove-sign"></span> </a>
					@endif
				</td>
				<td class="text-center">
					<a title="Restablecer contraseña" href="{{ action('UsuariosController@restablecer_contra', [$usuario->id]) }}" data-method="patch" data-title="Restablecer contraseña" data-confirm="¿Esta seguro que desea restablecer la contraseña al usuario '{{$usuario->username}}'?"><span class="glyphicon glyphicon-refresh"></span></a>
					<a title="Editar perfil" href="{{ action('UsuariosController@edit', [$usuario->id]) }}"><span class="glyphicon glyphicon-pencil"></span></a>
					<a href="{{ action('UsuariosController@destroy', [$usuario->id]) }}" title="Eliminar" data-method="delete" data-confirm="¿Estas seguro que desea eliminar al usuario '{{$usuario->username}}'?"> <span class="glyphicon glyphicon-trash"></span> </a>
				</td>
	        </tr>
	    @endforeach
	    </tbody>
	</table>
		
</div>
@endsection