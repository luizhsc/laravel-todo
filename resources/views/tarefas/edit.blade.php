@extends('template')
@section('content')

<h1>Edit Task - {{ $tarefa->titulo }} </h1>
<p class="lead">Edit this task below. <a href="{{ route('tarefas.index') }}">Go back to all tasks.</a></p>
<hr>


{!! Form::model($tarefa, ['method' => 'PUT','route' => ['tarefas.update', $tarefa->id]]) !!}

<div class="form-group">
    {!! Form::label('titulo', 'Title:', ['class' => 'control-label']) !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'Description:', ['class' => 'control-label']) !!}
    {!! Form::textarea('descricao', null, ['class' => 'form-control']) !!}
</div>

{!! Form::submit('Update Task', ['class' => 'btn btn-primary']) !!}

{!! Form::close() !!}

@stop