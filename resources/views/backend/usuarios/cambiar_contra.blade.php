@extends('aplicacion/app')

@section('content')
<div class="col-md-10 col-md-offset-1">
	
	<div class="text-center">
		<h1>Cambiar Contraseña</h1>
	</div>

	{!! Form::open(array('action' => ['UsuariosController@guardar_contra', $usuario->id], 'method' => 'PATCH' , 'class' => 'form-horizontal')) !!}

		<div class="form-group">
			{!! Form::label('password', 'Nueva contraseña', array('class' => 'control-label col-md-4')) !!}
			<div class="col-md-6">
				{!! Form::password('password', array('class' => 'form-control')) !!}
			</div>
		</div>
		@if ($errors->first('password'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('password')}}</div>@endif

		<div class="form-group">
			{!! Form::label('password_confirmation', 'Confirmar nueva contraseña', array('class' => 'control-label col-md-4')) !!}
			<div class="col-md-6">
				{!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
			</div>
		</div>
		@if ($errors->first('password_confirmation'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('password_confirmation')}}</div>@endif

		
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				{!! Form::submit('Guardar', array('class' => 'btn btn-primary')) !!}
				<a href="{{ action('UsuariosController@edit') }}" class="btn btn-default">CANCELAR</a>
		</div>

	{!! Form::close() !!}
		
</div>
@endsection