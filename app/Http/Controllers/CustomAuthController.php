<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class CustomAuthController extends Controller
{
    //
	public function ShowRegisterForm()
	{
		return view('custom.register');
	}
	
	public function Register(Request $request)
	{
		$this->validation($request);
		User::create($request->all());
		//return $request->all();
		return redirect('/')->with('Status','You are registered');
	}
	
	public function validation($request)
	{
	
		 $this->validate($request, [
			'fname' => 'required|max:255',
			'lname' => 'required|max:255',
			'email' => 'required|email|unique:max_users|max:255',
			'password' => 'required|confirmed|max:255',
		]);
	}
}
