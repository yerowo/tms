<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Validator;

/*
|--------------------------------------------------------------------------
| AuthController
|--------------------------------------------------------------------------
|
| Responsável pela autenticação do usuario, os métodos são:
| Login, Logout e Join
|
*/

class AuthController extends Controller
{
	public function login(Request $request)
	{
		$this->validate($request, [
			'email' => 'required',
			'password' => 'required',
		]);

		$user_data = array(
			'email' => $request->input('email'),
			'password' => $request->input('password')
		);


		if (Auth::attempt($user_data)) {
			$request->session()->regenerate();

			return redirect()->route('users.home');
		}

		return redirect()->route('login');
	}

	public function logout()
	{
		Auth::logout();

		return redirect()->route('users.home');
	}
}
