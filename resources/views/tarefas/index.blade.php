@extends('template')

@section('content')

 <div class="container">
 <div class="row">
           <div class="col-md-10 col-md-offset-1">
		   
				<h1 class="text-primary">Home</h1>
				
				<form action="stationary-add-item" method="POST">
					<div class="form-group">
					
						<input type="text" name="searchname" class="form-control" id="searchname" placeholder="Search">	
					</div> 
				</form>
				
				<div class="form-group">
					<a class="btn btn-success pull-left" href="{{ url('/tarefas/create') }}" role="button">New Task</a>
					<a class="btn btn-success pull-left" href="{{ url('/tags/create') }}" role="button">New Tag</a>
				</div> 
				
                <table class="table">				
					<thead>
						<tr>
							<th>Id</th>
							<th>Title</th>
							<th>Description</th>
							<th>Tag</th>							
						</tr>
					</thead>
					<tbody>
						@foreach($tarefas as $tarefa)
							<tr>			
								<td class="text-left">{{ $tarefa->id }}</td>
								<td class="text-left">{{ $tarefa->titulo }}</td>
								<td class="text-left">{{ $tarefa->descricao }}</td>	
								<td class="text-left">{{ $tag->name }}</td>									
								<td class="text-left">																
									<a href="{{ route('tarefas.show', $tarefa->id) }}" class="btn btn-info">View Task</a>
								</td>								
							</tr>
						@endforeach
					 </tbody>
				</table>
            </div>
        </div>
    </div>
@stop