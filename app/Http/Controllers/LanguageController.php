<?php namespace App\Http\Controllers;

class LanguageController extends Controller {

	public function spanish()
	{
		Session::put('lang', 'es');
		return redirect('/');
	}

	public function english()
	{
		Session::put('lang', 'en');
		return redirect('/');
	}
}