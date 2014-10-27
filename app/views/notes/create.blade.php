 @extends('aplication')

 @section('content')

	<h1>crear nueva tarea:</h1>

	{{ Form::open(['route'=>'notes.store'])}}
	<div>
		{{	Form::label('tittle','Tittle:')	}}
		{{ Form::text('tittle')}}
		{{$errors->first('tittle')}}
	</div>
		<br>
	<div>
		{{	Form::label('body','body:')	}}
		{{ Form::input('text','body')}}
		{{$errors->first('body')}}
	</div>
		<br>
	<div>
		{{	Form::label('status','status:')	}}
		{{ Form::input('text','status')}}
		{{$errors->first('status')}}
	</div>
	<br>
	<div>{{ Form::submit('Create Note')}}</div>
	{{ Form::close()}}
	
 @stop