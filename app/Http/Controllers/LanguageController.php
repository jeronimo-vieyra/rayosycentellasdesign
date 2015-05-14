<?php namespace App\Http\Controllers;

use App\Http\Requests;

class LanguageController extends Controller {

	public function spanish(Request $request)
	{
		$request->session()->put('lang', 'es');
		return redirect('/');
	}

	public function english()
	{
		Session::put('lang', 'en');
		return redirect('/');
	}
}