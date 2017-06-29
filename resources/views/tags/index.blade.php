@extends('template')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <h1 class="text-primary">Tag</h1>             
            <a href="{{ route('tarefas.index') }}" class="btn btn-warning">Back</a>
            <a class="btn btn-success right" href="{{ url('/tags/create') }}" role="button">New Tag</a>
			
			<hr>
			
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                    <tr>			
                        <td class="text-left">{{ $tag->id }}</td>
                        <td class="text-left">{{ $tag->nome }}</td>  
						<td class="text-left">																
                            <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-info">Detail Tag</a>
                        </td>							
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@stop