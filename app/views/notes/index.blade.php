 @extends('aplication')

 @section('content')

	<h1>Pendientes por hacer:</h1>
	@if($notes->count())
		<ul>
		@foreach ($notes as $index => $note)
			<li><a href="/notes/{{$index+1}}">{{ $note->tittle }}</a></li>
		@endforeach
		</ul>
	@else
		<p>yay! no hay nada pendiente!</p>
	@endif


	<a href="/notes/create"> Nueva Nota</a>
 @stop