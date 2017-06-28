@extends('template')

@section('content')
	<h1 class="lead">{{ $tarefa->titulo }}</h1>
	<p class="lead">{{ $tarefa->descricao }}</p>
	<hr>		

	<a href="{{ route('tarefas.index') }}" class="btn btn-info">Back</a>
	<a href="{{ route('tarefas.edit', $tarefa->id) }}" class="btn btn-primary">Edit</a>

	<div class="pull-right col-md-10 col-md-offset-1">
		<div class="pull-right col-md-10 col-md-offset-1">
			 {!! Form::open([
						'method' => 'DELETE',
						'route' => ['tarefas.destroy', $tarefa->id]
					]) !!}
					
				{!! Form::submit('Delete this task?', ['class' => 'btn btn-danger']) !!}
			{!! Form::close() !!}
		</div>
	</div> 

@stop