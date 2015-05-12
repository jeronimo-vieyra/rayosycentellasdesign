<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuariosRequest extends Request {

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
		$rules = array(
			'nombre' => 'required|min:2|max:100',
            'apellido' => 'required|min:2|max:100',
            'email' => 'required|email|min:6|max:100|',
		);

		if ( $this->method() == 'POST') 
		{
			$rules['username'] = 'required|min:6|max:100|unique:usuarios';
		}

		return $rules;
	}

}