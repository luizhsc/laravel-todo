@extends('layout.template')


@section('content')

<div class="container">

    <div class="input-group" style="margin-left: 400px">
    <form action="{{ action('TarefasController@busca') }}" method="get">  
        <div class="input-group">
          <input type="text" size="30" placeholder="Search by Tag..." class="form-control"  name="search" onkeyup="showResult(this.value)"/>
          <span class="input-group-btn">
            <button class="btn btn-flat btn-primary" type="submit">Search</button>    
          </span>
        </div><!-- /input-group -->
    </div>

<br>

<table class="table table-striped">
    <thead>
        <tr>
            <th class="text-center">Id</th>
            <th class="text-center">Title</th>
            <th class="text-center">Description</th>
            <th class="text-center">Tag</th>
        </tr>
    </thead>
    <tbody>                 
        @foreach($tarefas as $tarefa)
        <tr>            
            <td class="text-center">{{ $tarefa->id }}</td>
            <td class="text-center">{{ $tarefa->titulo }}</td>
            <td class="text-center">{{ $tarefa->descricao }}</td>                       
            <td class="text-center">{{ $tarefa->tag }}</td>
            <td class="text-right">                                                              
                <a href="{{ route('tarefas.show', $tarefa->id) }}" class="btn btn-info">View Task</a>
            </td>                               
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@stop