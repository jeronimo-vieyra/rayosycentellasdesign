<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Contactos extends Migration 
{

	public function up()
	{
		Schema::create('contactos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nombre');
			$table->string('email');
			$table->string('asunto');
			$table->longText('mensaje');
			$table->timestamps();
		});
	}

	public function down()
	{
		Schema::drop('contactos');
	}

}
