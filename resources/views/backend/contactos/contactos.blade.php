@extends('aplicacion/app')

@section('content')

<div class="col-md-8 col-md-offset-2">

	<table class="tabla table-responsive table table-hover table-condensed">
		<thead>
	        <tr>
	        	<th>Nombre</th>
				<th>E-mail</th>
				<th>Asunto</th>
				<th class="text-center">Acciones</th>
	        </tr>
	    </thead>
	    <tbody>
	    @foreach($contactos as $contacto)
	        <tr>

				<td>{{$contacto->nombre}}</td>
				<td>{{$contacto->email}}</td>
				<td>{{$contacto->asunto}}</td>
				<td class="text-center">
					<a title="Ver" href="{{ action('ContactosController@show', [$contacto->id]) }}"><span class="glyphicon glyphicon-plus"></span></a>
					<a title="Eliminar" href="{{ action('ContactosController@destroy', [$contacto->id]) }}" data-method="delete" data-confirm="¿Estas seguro que desea eliminar el contacto con asunto '{{$contacto->asunto}}'?"> <span class="glyphicon glyphicon-trash"></span> </a>
				</td>
	        </tr>
	    @endforeach
	    </tbody>
	</table>
		
</div>

@endsection