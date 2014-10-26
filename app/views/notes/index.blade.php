 @extends('aplication')

 @section('content')

	<h1>Pendientes por hacer:</h1>
	
	<ul>
	@foreach ($notes as $index => $note)
		<li><a href="/{{$index+1}}">{{ $note->tittle }}</a></li>
	@endforeach
	</ul>

	<a href="new"> Nueva Nota</a>
 @stop