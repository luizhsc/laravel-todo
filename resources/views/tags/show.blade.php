@extends('template')

@section('content')

<div class="col-md-10 col-md-offset-1">
    <h1>{{ $tag->nome }}</h1>    
    <hr>	

    <a href="{{ route('tarefas.index') }}" class="btn btn-info">Back</a>
    <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary">Edit</a>

    <div class="pull-right">
        <div class="pull-right">
            {!! Form::open([
            'method' => 'DELETE',
            'route' => ['tags.destroy', $tag->id]
            ]) !!}
            {!! Form::submit('Delete this tag?', ['class' => 'btn btn-danger']) !!}
            {!! Form::close() !!}
        </div>
    </div>    
</div>


@stop