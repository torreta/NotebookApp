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


}