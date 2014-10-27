 @extends('aplication')

 @section('content')

	<h1>crear nueva tarea:</h1>

	 <div class="row" class="align-center">
	  {{ Form::open(['route'=>'notes.store'])}}
	   <div class="control-group">
	   	<p class: 'control-label'>{{Form::label('tittle','Tittle:')	}}	</p>
	     <div class="controls">
			{{ Form::text('tittle')}}
	      </div>
	      {{$errors->first('tittle')}}
	    </div>
	    <div class="control-group">
	     <p class: 'control-label'>{{	Form::label('body','body:')	}}</p>
	      <div class="controls">
	        {{ Form::input('text','body')}}
	      </div>
	      {{$errors->first('body')}}
	    </div>
	    <div class="control-group">
	      <p class: 'control-label'>{{	Form::label('status','status:')	}}</p>
	      <div class="controls">
	        {{ Form::input('text','status')}}
	      </div>
	    </div>
	    <div class="control-group">
	      <div class="controls">
	      	<p  class: 'btn btn-default'>{{ Form::submit('Create Note')}}</p>     
	      </div>
	    </div>
	{{ Form::close()}}
	</div>
 @stop
