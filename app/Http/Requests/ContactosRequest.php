<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactosRequest extends Request {

	/**
	 * Determine if the user is authorized to make this request.
	 *
	 * @return bool
	 */
	public function authorize()
	{
		return true;
	}

	/**
	 * Get the validation rules that apply to the request.
	 *
	 * @return array
	 */
	public function rules()
	{
		return [
			'nombre' => 'required|min:4',
			'email' => 'required|email|min:6|max:100',
			'asunto' => 'required|min:4|max:255',
			'mensaje' => 'required',
		];
	}

}
