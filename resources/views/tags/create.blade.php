@extends('template')

@section('content')
<div class="col-md-10 col-md-offset-1">

    <h1 class="text-primary">Create new Task</h1>
    <hr>
	
	
    {!! Form::open(array('route' => 'tags.store', 'class' => 'form')) !!}
    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <div class="form-group">			
        {!! Form::text('nome', null, 
        array('required', 
        'class'=>'form-control', 
        'placeholder'=>'Name')) !!}
    </div>
	<hr>

    <div class="form-group">
		 <a href="{{ route('tarefas.index') }}" class="btn btn-warning">Back</a>
        {!! Form::submit('Save', 
        array('class'=>'btn btn-primary')) !!}
       
    </div>

	
    {!! Form::close() !!}
	
		
	
	


</div>


@stop