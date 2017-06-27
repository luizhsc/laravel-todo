@extends('template')

@section('content')
	<h1 class="text-primary">Create new Task</h1>
	<br>
	{!! Form::open(array('route' => 'tarefas.store', 'class' => 'form')) !!}
	@if($errors->any())
			<div class="alert alert-danger">
			@foreach($errors->all() as $error)
				<p>{{ $error }}</p>
			@endforeach
			</div>
	@endif

		<div class="form-group">			
			{!! Form::text('titulo', null, 
				array('required', 
					  'class'=>'form-control', 
					  'placeholder'=>'Title')) !!}
		</div>

		<div class="form-group">			
			{!! Form::textarea('descricao', null, 
				array('required', 
					  'class'=>'form-control', 
					  'placeholder'=>'Description')) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Save', 
			  array('class'=>'btn btn-primary')) !!}
		</div>
		
		
	
	{!! Form::close() !!}
	
	
@stop