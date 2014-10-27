<?php

class NotesController extends \BaseController {

	/**
	 * Display a listing of notes
	 *
	 * @return Response
	 */
	public function index()
	{
		

		  $notes_pending = Note::where('status','Pending')->orderBy('created_at', 'desc')->lists('id');
		  $notes_done = Note::where('status','Done')->orderBy('created_at', 'desc')->lists('id');
		
		  $notes_ids= array_unique(array_merge($notes_pending, $notes_done));
		
		  $notes = DB::table('notes')->whereIn('id', $notes_ids)->orderBy('status','desc')->get();
		
			return View::make('notes.index', compact('notes'));
	}

	/**
	 * Show the form for creating a new note
	 *
	 * @return Response
	 */
	public function create()
	{

		return View::make('notes.create');
	}

	/**
	 * Store a newly created note in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make($data = Input::all(), Note::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		Note::create($data);

		return Redirect::route('notes.index');
	}

	/**
	 * Display the specified note.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$note = Note::findOrFail($id);

		return View::make('notes.show', compact('note'));
	}

	/**
	 * Show the form for editing the specified note.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$note = Note::find($id);

		return View::make('notes.edit', compact('note'));
	}

	/**
	 * Update the specified note in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$note = Note::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Note::$rules);

		if ($validator->fails())
		{
			return Redirect::back()->withErrors($validator)->withInput();
		}

		$note->update($data);

		return Redirect::route('notes.index');
	}

	/**
	 * Remove the specified note from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Note::destroy($id);

		return Redirect::route('notes.index');
	}

	public function marcar($id)
	{
		$note = Note::findOrFail($id);

		if(($note->status)=='Done'){

			$note->status = 'Pending';
		}else{
			$note->status = 'Done';
		}

		$note->save();

		return Redirect::route('notes.index');
	}
}
