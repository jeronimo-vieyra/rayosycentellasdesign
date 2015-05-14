<?php
	// FRONTEND
	Route::post('contacto/enviar_consulta', 'ContactosController@enviar_consulta');

	Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function()
	{	
		// CONTACTOS
		Route::resource('contactos','ContactosController', ['only' => ['update']]);
	});

?>