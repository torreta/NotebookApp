 @extends('aplication')

 @section('content')

	<h1>Detalles de la nota:</h1>
	

		<h3><b>Titulo: </b>{{ $note->tittle }}</h3>
		<br>
		<h3><b>Descripcion:</b> {{ $note->body }}</h3>
		<br>
		<h3><b> Estado:</b> {{ $note->status }}</h3>
		<br>
		
		<a href="/notes/{{$note->id}}/edit" class= "btn btn-warning "> Editar nota</a>
		<br>
		<br>
	{{Form::open(array('action' => array('NotesController@destroy', $note->id), 
	'method' => 'delete' ));}}
	<div>{{ Form::submit('Borrar Nota')}}</div>
	{{ Form::close()}}
 @stop