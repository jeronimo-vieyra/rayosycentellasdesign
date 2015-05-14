<?php namespace App\Http\Controllers;

use Auth;
use App\Models\Contacto;
use App\Http\Requests;
use App\Http\Requests\ContactosRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ContactosController extends Controller 
{
	public function index()
	{
		$data['contactos'] = Contacto::all();
		return view('backend/contactos/contactos', $data);
	}

	public function create()
	{
		return view('backend/contactos/create');
		
	}

	public function show($id)
	{
		$data['contacto'] = Contacto::findOrFail($id);
		return view('backend/contactos/show', $data);
	}

	public function destroy($id)
	{
		$contacto = Contacto::findOrFail($id);
		$contacto->delete();
		
		\Session::flash('noticia', 'El contacto con asunto "'.$contacto->asunto.'" fue eliminado con exito.');
		return redirect('admin/contactos');
	}

	// FRONTEND (metodos no protegidos de la sesion)

	public function enviar_consulta(ContactosRequest $request)
	{
		$datos = $request->all();
		$contacto = Contacto::create($datos);

		\Mail::send('emails.mensaje_contacto', ['asunto' => $contacto->asunto, 'mensaje' => $contacto->mensaje], function($message) use($contacto)
			{
				$message->from($contacto->email, $contacto->nombre);
		    	$message->to('hola@rayosycentellasdesign.com', 'Rayos & Centellas')->subject('Contacto');
			}
		);


		\Session::flash('noticia', 'El CONTACTO fue creada con exito. Se envio el email con exito.');
		return redirect('admin/contactos');
	}

}
