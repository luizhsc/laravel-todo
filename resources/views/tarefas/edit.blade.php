@extends('template')

@section('content')
	<h1 class="text-primary">Edit</h1>
	<br>
	<form class="form-horizontal">
	  <div class="form-group">
		<label class="control-label col-sm-2" for="titulo">Titulo</label>
		<div class="col-sm-10">
		  <input type="text" class="form-control" id="titulo" placeholder="Titulo">
		</div>
	  </div>
		<div class="form-group">
			<label class="control-label col-sm-2" for="pwd" placeholder="Descrição">Descrição:</label>
		<div class="col-sm-10"> 
      <textarea class="form-control"></textarea>
    </div>
  </div>
  </div>
  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

@stop