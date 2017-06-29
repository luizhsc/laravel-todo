@extends('template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <h1 class="text-primary">Index</h1>

            <form action="stationary-add-item" method="POST" >
                <input type="text" name="searchname" class="form-control" id="searchname" placeholder="Search Tags">	
            </form>

			<a href="{{ route('tags.index') }}" class="btn btn-default pull-left">View Tag</a>                        
            <a class="btn btn-success pull-right" href="{{ url('/tarefas/create') }}" role="button">New Task</a><br>
            
			
			<hr>
			
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
                        <td class="text-left">{{ $tarefa->tag }}</td>
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