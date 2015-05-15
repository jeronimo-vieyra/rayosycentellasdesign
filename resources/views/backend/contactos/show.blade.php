@extends('aplicacion/app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-4">
			
			<p> <strong>De:</strong> {{$contacto}} </p>
			<p> <strong>Asunto:</strong> {{$contacto->asunto}} </p>
			<p> <strong>Mensaje:</strong> {{$contacto->mensaje}} </p>

			<a class="col-md-8 col-md-offset-4" title="Volver" href="{{ action('ContactosController@index') }}"><h5 class="derecha">VOLVER</h5></a>
		</div>
	</div>
</div>
@endsection