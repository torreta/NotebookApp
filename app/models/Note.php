<?php

class Note extends \Eloquent {

	protected $table = 'notes';

	// Add your validation rules here
	public static $rules = [
		// 'title' => 'required'
			'tittle' => 'required',
			'status' => 'required'
	];

	public static $messages;

	// Don't forget to fill this array
	protected $fillable = ['tittle','body','status'];

	public function isValid($data)
	{

		$validation = validator::make($data,static::$rules);


		if $validation->passes(){
			return true;
		}

		static::$messages = $validation->messages();

		return false;



	}

}