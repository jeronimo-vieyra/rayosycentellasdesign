<?php
	// FRONTEND
	Route::post('contacto/enviar_consulta', 'ContactosController@enviar_consulta');
	Route::get('contacto/enviar_consulta_get', 'ContactosController@enviar_consulta');

	Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function()
	{	
		// CONTACTOS
		Route::resource('contactos','ContactosController', ['only' => ['index', 'create','show', 'destroy']]);
	});

?>