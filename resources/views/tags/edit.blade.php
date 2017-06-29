@extends('template')
@section('content')


<div class="col-md-10 col-md-offset-1">
    <h1>Edit Task - {{ $tag->nome }} </h1>
    <p class="lead">Edit this task below. <a href="{{ route('tarefas.index') }}">Go back to all tasks.</a></p>
    <hr>

    {!! Form::model($tag, ['method' => 'PUT','route' => ['tags.update', $tag->id]]) !!}

    @if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
    @endif

    <div class="form-group">
        {!! Form::label('nome', 'Name of Tag:', ['class' => 'control-label']) !!}
        {!! Form::text('nome', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Update Tag', ['class' => 'btn btn-primary']) !!}


        <a href="{{ route('tarefas.index') }}" class="btn btn-warning">Back</a>
    </div>

    {!! Form::close() !!}


</div>
@stop