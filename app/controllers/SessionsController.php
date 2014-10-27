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

			$message = 'Ahora estas logueado señor XD';

			return Redirect::route('notes.index',compact('message'));
		}
	
		return Redirect::back()->withInput();
		//	return Redirect::route('sessions.create');
	}





}