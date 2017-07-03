@extends('layout.template')
@section('content')


<div class="col-md-10 col-md-offset-1 container">

    <h1>Edit Task: {{ $tarefa->titulo }} </h1>

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
        <select name="tag" class="form-control">
            <option value="">Select Tag</option>
            @foreach($tags as $tag)
            <option value="{{ $tag }}">{{$tag}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
        {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
    </div>
    <div class="form-group">
        <a href="{{ route('tarefas.index') }}" class="btn btn-warning">Back</a>
        {!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}    
    </div>
    {!! Form::close() !!}


</div>
@stop