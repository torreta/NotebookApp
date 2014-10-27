 @extends('aplication')

 @section('content')

	<h1>Iniciar session:</h1>
	{{ Form::open(['route'=>'sessions.store'])}}
	
	<div>
		{{Form::label('email','Email:')	}}
		{{ Form::email('email') }}
	</div>
		<br>
	<div>
		{{Form::label('password','Password:')	}}
		{{ Form::password('password') }}
	</div>
	<br>
	{{Form::submit('Login', array('class' => 'btn btn-primary'))}}
	{{ Form::close()}}
	
 @stop