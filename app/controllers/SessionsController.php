<?php

class SessionsController extends \BaseController {

	public function create()
	{
		if (Auth::check()){

			return Redirect::route('notes.index');
		}

		return View::make('sessions.create');
	}


	public function destroy()
	{
	
		Auth::logout();

		return Redirect::route('notes.index');
	}

	public function store()
	{
		if(Auth::attempt(Input::only('email','password'))){

			Auth::user();

			Session::flash('alert', 'usted ya se encontraba autenticado');

			return Redirect::route('notes.index');
		}
		
		Session::flash('error', 'Usuario o contraseña invalidos.');
		
		return Redirect::back()->withInput();
		//	return Redirect::route('sessions.create');
	}





}