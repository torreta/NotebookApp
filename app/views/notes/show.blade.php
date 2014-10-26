 @extends('aplication')

 @section('content')

	<h1>Pendientes por hacer:</h1>
	
	<ul>	
		<li>{{ $note->tittle }}</li>
		<li>{{ $note->body }}</li>
		<li>{{ $note->status }}</li>
	</ul>

 @stop