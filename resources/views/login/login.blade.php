@extends('aplicacion/app')

@section('content')
<div class="col-md-10 col-md-offset-1">
	
	<div class="text-center">
		<h1>Iniciar sesion</h1>
	</div>

	@if (Session::has('authenticate'))
		<div class="alert alert-danger fade in">
		    <button class="close" data-dismiss="alert" aria-hidden="true">×</button>
		    <span class="glyphicon glyphicon-remove-sign"></span> {{ Session::get('authenticate') }}
		</div>
	@endif	

	{!! Form::open( array( 'action' => 'LoginController@authenticate', 'method' => 'POST' , 'class' => 'form-horizontal' ) ) !!}

		<div class="form-group">
			{!! Form::label('username', 'Usuario', array('class' => 'control-label col-md-4')) !!}
			<div class="col-md-6">
				{!! Form::text('username', null, array('class' => 'form-control')) !!}
			</div>
		</div>
		@if ($errors->first('username'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('username')}}</div>@endif

		<div class="form-group">
			{!! Form::label('password', 'Contraseña', array('class' => 'control-label col-md-4')) !!}
			<div class="col-md-6">
				{!! Form::password('password', array('class' => 'form-control')) !!}
			</div>
		</div>
		@if ($errors->first('password'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('password')}}</div>@endif

		
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				{!! Form::submit('Iniciar sesion', array('class' => 'btn btn-primary')) !!}
				<a href="{{url()}}/password/email ">¿Olvido su contraseña?</a>
			</div>
		</div>

	{!! Form::close() !!}
		
</div>
@endsection