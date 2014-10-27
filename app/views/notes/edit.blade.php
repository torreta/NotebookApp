 @extends('aplication')

 @section('content')

	<h1>Editar tarea:</h1>
	
	{{Form::open(array('action' => array('NotesController@update', $note->id),
	 'method' => 'put' ));}}
	<div>
		{{	Form::label('tittle','Titulo:')	}}
		{{ Form::text('tittle', $note->tittle)}}
	</div>
		<br>
		{{ Form::label('body','Descripcion:')	}}
	<div>
		
		{{ Form::textarea('body',$note->body)}}
		
	</div>
		<br>
	<div>

		{{	Form::label('status','Estado:')	}}
	{{Form::select('status', array('Pending' => 'Pending', 'Done' => 'Done'), 'Pending');}}
	</div>
	<br>
	<div>{{ Form::submit('Save Changes')}}</div>
	{{ Form::close()}}
	
 @stop