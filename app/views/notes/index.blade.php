 @extends('aplication')

 @section('content')
	
	
	
	<h1>Pendientes por hacer:</h1>
	@if($notes->count())

		 <div class="media">
		  <div class="media-body">
		    <table class="table table-hover">
		      <thead>
		        <tr>
		          <th>Nota</th>
		          <th>status</th>
		          <th>Creada en</th>
		          <th colspan="3"></th>
		        </tr>
		      </thead>

		      <tbody>
		       	@foreach ($notes as $index => $note)
		        <tr>
		          <td>{{ $note->tittle }}</td>

		          <td>{{ $note->status }}</td>
					
				  <td>{{ $note->created_at }}</td>

		          <td><a href="/notes/{{$note->id}}" class:'btn btn-mini'> mostrar </td>
					@if ( $note->status == 'Done')

		           		<td><a href="/notes/marcar/{{$note->id}}" class:'btn btn-mini'> {{ Form::checkbox('status', 'Pending', true) }} </td>
					@else
						<td><a href="/notes/marcar/{{$note->id}}" class:'btn btn-mini'> {{ Form::checkbox('status', 'Pending', false) }}  </td>
					@endif
		        </tr>
		        @endforeach
		      </tbody>
		    </table>
		  </div>
		</div>
	@else
		<p>yay! no hay nada pendiente!</p>
	@endif


	<a href="/notes/create" class:'btn btn-mini'> Nueva Nota</a>
 @stop
