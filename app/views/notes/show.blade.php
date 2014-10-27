 @extends('aplication')

 @section('content')

	<h1>Pendientes por hacer:</h1>
	
	<ul>	
		<li>{{ $note->tittle }}</li>
		<li>{{ $note->body }}</li>
		<li>{{ $note->status }}</li>
	</ul>
		<a href="/notes/{{$note->id}}/edit"> Editar nota</a>
		<br>

	{{Form::open(array('action' => array('NotesController@destroy', $note->id), 
	'method' => 'delete' ));}}
	<div>{{ Form::submit('Delete Note')}}</div>
	{{ Form::close()}}
 @stop