@extends('aplicacion/app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Restablecer la contraseña</div>
				<div class="panel-body">

					{!! Form::open( array( 'action' => 'Auth\PasswordController@postReset', 'method' => 'POST' , 'class' => 'form-horizontal' ) ) !!}

						{!! Form::hidden('_token', csrf_token()) !!}
						{!! Form::hidden('token', $token) !!}

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
							{!! Form::label('password_confirmation', 'Confirmar contraseña', array('class' => 'control-label col-md-4')) !!}
							<div class="col-md-6">
								{!! Form::password('password_confirmation', array('class' => 'form-control')) !!}
							</div>
						</div>
						@if ($errors->first('password_confirmation'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('password_confirmation')}}</div>@endif

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								{!! Form::submit('Restablecer', array('class' => 'btn btn-primary')) !!}
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
