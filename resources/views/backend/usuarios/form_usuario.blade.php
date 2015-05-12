<div class="col-md-10 col-md-offset-1">
	
	<div class="text-center">
		<h1>{{$titulo}}</h1>
	</div>

	{!! Form::model($usuario, array('action' => $accion, 'method' => $metodo , 'class' => 'form-horizontal')) !!}

		<div class="form-group">
			{!! Form::label('nombre', 'Nombre', array('class' => 'control-label col-md-4')) !!}
			<div class="col-md-6">
				{!! Form::text('nombre', null, array('class' => 'form-control')) !!}
			</div>
		</div>
		@if ($errors->first('nombre'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('nombre')}}</div>@endif

		<div class="form-group">
			{!! Form::label('apellido', 'Apellido', array('class' => 'control-label col-md-4')) !!}
			<div class="col-md-6">
				{!! Form::text('apellido', null, array('class' => 'form-control')) !!}
			</div>
		</div>
		@if ($errors->first('apellido'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('apellido')}}</div>@endif

		<div class="form-group">
				{!! Form::label('email', 'E-mail', array('class' => 'control-label col-md-4')) !!}
				<div class="col-md-6">
					{!! Form::text('email',null, array('class' => 'form-control')) !!}
				</div>
			</div>
			@if ($errors->first('email'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('email')}}</div>@endif

		@if ($metodo == 'POST')
			<div class="form-group">
				{!! Form::label('username', 'Usuario', array('class' => 'control-label col-md-4')) !!}
				<div class="col-md-6">
					{!! Form::text('username',null, array('class' => 'form-control')) !!}
				</div>
			</div>
			@if ($errors->first('username'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('username')}}</div>@endif
		@endif

		
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				{!! Form::submit($boton, array('class' => 'btn btn-primary')) !!}
				<a href="{{ action($cancelar) }}" class="btn btn-default">CANCELAR</a>
			</div>
		</div>

	{!! Form::close() !!}
		
</div>