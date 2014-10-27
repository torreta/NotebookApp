<?php

class SessionsController extends \BaseController {

		public function create()
	{
		if (Auth::check()){

			return 'ya tabas logueado';//notes.index
		}

		return View::make('sessions.create');
	}


		public function destroy()
	{
	
		Auth::logout();

		return Redirect::route('sessions.create');
	}

	public function store()
	{
		if(Auth::attempt(Input::only('email','password'))){

			return Auth::user();

		}
	
		return Redirect::back()->withInput();
		//	return Redirect::route('sessions.create');
	}





}