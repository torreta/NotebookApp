 @extends('aplication')

 @section('content')

	<h1>Pendientes por hacer:</h1>
	
	<ul>
	@foreach ($notes as $index => $note)
		<li>{{ $note->tittle }}</li>
	@endforeach
	</ul>

 @stop