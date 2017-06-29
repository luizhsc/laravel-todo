@extends('template')

@section('content')
<div class="col-md-10 col-md-offset-1">

    <h1 class="text-primary">Create new Task</h1>
    <br>
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