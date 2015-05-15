<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model 
{
	protected $table = 'contactos';

	protected $fillable = ['nombre', 'email', 'asunto', 'mensaje'];

	public function __toString()
	{
		return sprintf("%s", $this->nombre);
	}
}
