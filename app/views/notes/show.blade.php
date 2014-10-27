 @extends('aplication')

 @section('content')

	<h1>Pendientes por hacer:</h1>
	
	<ul>	
		<li>{{ $note->tittle }}</li>
		<li>{{ $note->body }}</li>
		<li>{{ $note->status }}</li>
	</ul>
		<a href="/notes/{{$note->id}}/edit"> Editar nota</a>
		<a href="/notes/{{$note->id}}" method="DELETE"> Borrar nota</a>
 @stop