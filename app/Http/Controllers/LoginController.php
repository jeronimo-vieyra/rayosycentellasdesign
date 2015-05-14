<?php namespace App\Http\Controllers;

use Auth;
use App\Models\Usuario;
use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\PasswordRequest;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LoginController extends Controller 
{
	public function index()
	{
		return view('login.login');
	}

	public function authenticate(LoginRequest $request)
	{
		if ( \Auth::attempt( ['username' => \Request::input('username'), 'password' => \Request::input('password'), 'estado' => true] ) )
		{
			return redirect('admin/usuarios');
		}
		else
		{
			\Session::flash('authenticate', 'El usuario o contraseña son inválidos.');
			return redirect('login');
		}
	}

	// public function postReset(PasswordRequest $request)
	// {
	// 	$input = $request->all();
	// 	$usuario = Usuario::where('username', '=', $input['username']);
		
	// 	var_dump($usuario)
	// 	die();

	// 	$input['password'] = \Hash::make($input['password']);

	// 	\Session::flash('noticia', 'El usuario "'.$usuario->username.'" fue creado con exito.');
	// 	return redirect('login');
	// }
}