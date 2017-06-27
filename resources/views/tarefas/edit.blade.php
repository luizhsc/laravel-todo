@extends('template')

@section('content')
	<h1 class="text-primary">Edit</h1>
	<br>
	<form class="" action="/update" method="POST">
		<div class="form-group col-md-10 col-md-offset-1">
			<input class="form-control" type="text" name="titulo" value="" placeholder="Titulo">
		</div>  	
		
		<div class="form-group col-md-10 col-md-offset-1">
			<textarea class="form-control" name="descricao" rows="8" cols="40" placeholder="Descricao"></textarea>
		</div>
		
		<div class="form-group col-md-10 col-md-offset-1">	
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<input type="submit" class="btn btn-primary" type="submit" name="name" value="Editar">
		</div>  
	</form>

@stop