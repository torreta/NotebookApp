<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//Route::get('/', 'NotesController@index');

// // Endpoints first
// Route::get('/', 'NotesController@index');
// Route::get('/new', 'NotesController@create');

// // With parameters later
// Route::get('/{id}', 'NotesController@show');
// Route::get('/{id}/edit', 'NotesController@edit');
// //Route::get( 'notes/new', array('as'=> 'new_notes','uses'=>'notes@new'));
// Route::post('/','NotesController@store');

Route::get('/', 'NotesController@index');
Route::resource('notes','NotesController');