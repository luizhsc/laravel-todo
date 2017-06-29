@extends('template')

@section('content')
<<<<<<< HEAD
<div class="col-md-10 col-md-offset-1">

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
        <a href="{{ route('tarefas.index') }}" class="btn btn-warning">Back</a>
    </div>
    <div class="form-group">
        
    </div>


    {!! Form::close() !!}

</div>


=======
	<h1 class="text-primary col-md-10 col-md-offset-1">Create new Task</h1>
	<br>
	{!! Form::open(array('route' => 'tarefas.store', 'class' => 'form')) !!}
		@if($errors->any())
				<div class="alert alert-danger">
				@foreach($errors->all() as $error)
					<p>{{ $error }}</p>
				@endforeach
				</div>
		@endif

		<div class="col-md-10 col-md-offset-1">			
			{!! Form::text('titulo', null, 
				array('required', 
					  'class'=>'form-control', 
					  'placeholder'=>'Title')) !!}
		</div>
		
		<br>

		<div class="col-md-10 col-md-offset-1">	
		<br>		
			{!! Form::textarea('descricao', null, 
				array('required', 
					  'class'=>'form-control', 
					  'placeholder'=>'Description')) !!}
		</div>
		
		<div class="col-md-10 col-md-offset-1">
		<br>
			{!! Form::submit('Save', 
			  array('class'=>'btn btn-success')) !!}
			  
			 {!! Form::submit('Back', 
				array('class'=>'btn btn-primary')) !!}
		</div>
		
	{!! Form::close() !!}
	
	
>>>>>>> f098be063901a41b68469d0c0b29d02ad796ed08
@stop