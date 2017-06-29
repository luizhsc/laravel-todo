@extends('template')
@section('content')


<div class="col-md-10 col-md-offset-1">
    <h1>Edit Task - {{ $tarefa->titulo }} </h1>
    <p class="lead">Edit this task below. <a href="{{ route('tarefas.index') }}">Go back to all tasks.</a></p>
    <hr>
    
    {!! Form::model($tarefa, ['method' => 'PUT','route' => ['tarefas.update', $tarefa->id]]) !!}

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <div class="form-group">
        {!! Form::label('titulo', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}


        <a href="{{ route('tarefas.index') }}" class="btn btn-warning">Back</a>
    </div>
    {!! Form::close() !!}


</div>
@stop