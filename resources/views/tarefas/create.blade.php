@extends('template')

@section('content')
	<h1 class="text-primary">Create</h1>
	<br>
	
	<form class="form-horizontal" method="post">	
	
	  <div class="form-group col-md-10 col-md-offset-1">
			<label class="control-label col-sm-2" for="titulo">Titulo</label>			
			<div class="col-sm-5">
				<input type="text" name="titulo" class="form-control" placeholder="Titulo">
			</div>
	  </div>
	  
	  <div class="form-group col-md-10 col-md-offset-1">
		  <label class="control-label col-sm-2" for="titulo">Descrição</label>
			<div class="col-sm-5">
				<textarea class="form-control" name="descricao" placeholder="Descrição"></textarea>
			</div>
	  </div>	
  <div class="form-group col-md-10 col-md-offset-1">
			<div class="col-sm-offset-2 col-sm-10">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
	  </div>  
	
</form>

@stop