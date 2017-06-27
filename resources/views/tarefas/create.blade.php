@extends('template')

@section('content')
	<h1 class="text-primary">Create</h1>
	<br>
	{!! Form::open(array('route' => 'tarefas.store', 'class' => 'form')) !!}

		<div class="form-group">			
			{!! Form::text('titulo', null, 
				array('required', 
					  'class'=>'form-control', 
					  'placeholder'=>'Titulo')) !!}
		</div>

		<div class="form-group">			
			{!! Form::textarea('descricao', null, 
				array('required', 
					  'class'=>'form-control', 
					  'placeholder'=>'Descrição')) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Salvar!', 
			  array('class'=>'btn btn-primary')) !!}
		</div>
	{!! Form::close() !!}
@stop