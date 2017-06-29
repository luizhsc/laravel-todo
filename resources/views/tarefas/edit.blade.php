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

    <div class="form-group col-md-10 col-md-offset-1">
        {!! Form::label('titulo', 'Title:', ['class' => 'control-label']) !!}
        {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
    </div>


    <div class="form-group col-md-10 col-md-offset-1">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group col-md-10 col-md-offset-1">
        {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}


    {!! Form::model($tags, ['method' => 'PUT','route' => ['tags.update', $tags->id]]) !!}

    <div class="form-group col-md-10 col-md-offset-1">
        {!! Form::label('name', 'Name of Tag:', ['class' => 'control-label']) !!}
        {!! Form::text('titulo', null, ['class' => 'form-control']) !!}

        {{ Form::select('tags', $tags, null, array('class' => 'form-control')) }}
    </div>

    {!! Form::close() !!}
    >>>>>>> f098be063901a41b68469d0c0b29d02ad796ed08
    @stop