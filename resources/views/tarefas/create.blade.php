@extends('template')

@section('content')

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



@stop