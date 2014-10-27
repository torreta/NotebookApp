 @extends('aplication')

 @section('content')

	<h1>crear nueva tarea:</h1>
	
	{{Form::open(array('action' => array('NotesController@update', $note->id),
	 'method' => 'put' ));}}
	<div>
		{{	Form::label('tittle','Tittle:')	}}
		{{ Form::text('tittle', $note->tittle)}}
	</div>
		<br>
	<div>
		{{	Form::label('body','body:')	}}
		{{ Form::input('text','body',$note->body)}}
	</div>
		<br>
	<div>

		{{	Form::label('status','status:')	}}
		{{Form::select('status', array(
		    'pending' => array('Pending' => 'Pending'),
		    'done' => array('Done' => 'Done'),
		));}}
	</div>
	<br>
	<div>{{ Form::submit('Save Changes')}}</div>
	{{ Form::close()}}
	
 @stop