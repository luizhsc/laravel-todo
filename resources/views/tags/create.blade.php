@extends('template')

@section('content')
	<h1 class="text-primary col-md-10 col-md-offset-1">Create new Tag</h1>
	<br>
	{!! Form::open(array('route' => 'tags.store', 'class' => 'form')) !!}
		@if($errors->any())
				<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
				</div>
		@endif

		<div class="col-md-10 col-md-offset-1">			
			{!! Form::text('name', null, 
				array('required', 
					  'class'=>'form-control', 
					  'placeholder'=>'Name of Tag')) !!}
		</div>
		
		<br>		
		
		<div class="col-md-10 col-md-offset-1">
		<br>
			{!! Form::submit('Save', 
			  array('class'=>'btn btn-success')) !!}
			  
			 {!! Form::submit('Back', 
				array('class'=>'btn btn-primary')) !!}
		</div>
		
	{!! Form::close() !!}
	
	
@stop