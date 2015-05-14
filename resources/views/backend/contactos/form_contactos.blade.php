<div class="">
		<h1>{{$titulo}}</h1>
	</div>

	{!! Form::open(array('action' => $accion, 'method' => $metodo , 'class' => 'form-horizontal')) !!}
		
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre', array('class' => 'control-label col-md-4')) !!}
			<div class="col-md-6">
				{!! Form::text('nombre', null, array('class' => 'form-control')) !!}
			</div>
		</div>
		@if ($errors->first('nombre'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('nombre')}}</div>@endif

		<div class="form-group">
			{!! Form::label('email', 'E-mail', array('class' => 'control-label col-md-4')) !!}
			<div class="col-md-6">
				{!! Form::text('email',null, array('class' => 'form-control')) !!}
			</div>
		</div>
		@if ($errors->first('email'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('email')}}</div>@endif

		<div class="form-group">
			{!! Form::label('asunto', 'Asunto', array('class' => 'control-label col-md-4')) !!}
			<div class="col-md-6">
				{!! Form::text('asunto', null, array('class' => 'form-control')) !!}
			</div>
		</div>
		@if ($errors->first('asunto'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('asunto')}}</div>@endif

		<div class="form-group">
			{!! Form::label('mensaje', 'Mensaje', array('class' => 'control-label col-md-4')) !!}
			<div class="col-md-6">
				{!! Form::textarea('mensaje',null, array('class' => 'form-control', 'rows' => 5)) !!}
			</div>
		</div>
		@if ($errors->first('mensaje'))<div class="col-md-6 col-md-offset-4 alert alert-danger">{{$errors->first('mensaje')}}</div>@endif

		
		<div class="form-group">
			<div class="col-md-6 col-md-offset-4">
				{!! Form::submit($boton, array('class' => 'btn btn-primary col-md-12')) !!}
			</div>
		</div>

	{!! Form::close() !!}