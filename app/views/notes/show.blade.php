 @extends('aplication')

 @section('content')

	<h1>Detalles de la nota:</h1>
	

		<h3>Titulo: {{ $note->tittle }}</h3>
		<br>
		<h3>Descripcion: {{ $note->body }}</h3>
		<br>
		<h3> Estado: {{ $note->status }}</h3>
		<br>
		
		
		<a href="/notes/{{$note->id}}/edit"> Editar nota</a>
		<br>

	{{Form::open(array('action' => array('NotesController@destroy', $note->id), 
	'method' => 'delete' ));}}
	<div>{{ Form::submit('Delete Note')}}</div>
	{{ Form::close()}}
 @stop