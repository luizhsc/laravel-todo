
@extends('template')


@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 ">

            <h1 class="text-primary">Index</h1>
			<br>		
			
			<form action="{{ action('TarefasController@busca') }}"method="get">					
				<input type="text" size="30" placeholder="Search by Tag..." class="form-control"  name="search" onkeyup="showResult(this.value)"/>
                <div id="livesearch"></div>	               									
				<button class="btn btn-flat btn-primary" type="submit">Search</button>			
			</form>					
					
			<br>
			
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