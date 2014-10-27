 @extends('aplication')

 @section('content')
<h1>crear nueva tarea:</h1>
	
	{{ Form::open(['route'=>'notes.store'])}}
	<div>
		{{	Form::label('tittle','Tittle:')	}}
		{{ Form::text('tittle')}}
	</div>
		<br>
		{{ Form::label('body','Descripcion:')	}}
	<div>
		
		{{ Form::textarea('body')}}
		
	</div>
		<br>
	<div>

	{{	Form::label('status','status:')	}}
	{{Form::select('status', array('Pending' => 'Pending', 'Done' => 'Done'), 'Pending');}}
	</div>
	<br>
	<div>{{ Form::submit('Save Changes')}}</div>
	{{ Form::close()}}
	
	
 @stop
