@extends('template')

@section('content')

<div class="col-md-10 col-md-offset-1">
    <h1>{{ $tarefa->titulo }}</h1>
    <p>{{ $tarefa->descricao }}</p>
    <hr>	

    <a href="{{ route('tarefas.index') }}" class="btn btn-info">Back</a>
    <a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-primary">Edit</a>

    <div class="pull-right">
        <div class="pull-right">
            {!! Form::open([
            'method' => 'DELETE',
            'route' => ['tarefas.destroy', $tarefa->id]
            ]) !!}
            {!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>    
</div>


@stop