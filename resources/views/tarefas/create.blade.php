@extends('template')

@section('content')
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


@stop