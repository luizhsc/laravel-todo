@extends('template')

@section('content')
 <div class="container">
 <div class="row">
           <div class="col-md-10 col-md-offset-1">
				<h1 class="text-primary">Index</h1>
				<a class="btn btn-success pull-right" href="{{ url('/tarefas/create') }}" role="button">Nova Tarefa</a>
                <table class="table">
					<thead>
						<tr>
							<th>Id</th>
							<th>Titulo</th>
							<th>Descrição</th>	
							<th>Ação</th>
						</tr>
					</thead>
					<tbody>
						@foreach($tarefas as $tarefa)
							<tr>			
								<td class="text-left">{{ $tarefa->id }}</td>
								<td class="text-left">{{ $tarefa->titulo }}</td>
								<td class="text-left">{{ $tarefa->descricao }}</td>		
								<td class="text-left">
									<button type="submit" class="btn btn-danger btn-xs">
										<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
									</button>
									<a href="{{ url('/tarefas/'.$tarefa->id.'/edit') }}" class="btn btn-info btn-xs">
										<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
									</a>
								</td>								
							</tr>
						@endforeach
					 </tbody>
				</table>
            </div>
        </div>
    </div>
@stop