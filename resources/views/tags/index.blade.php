@extends('layout.template')

@section('content')

<div class="container">

    <table class="table">
        <thead>
            <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Name</th>                                         
            </tr>
        </thead>
        <tbody>
            @foreach($tags as $tag)
            <tr>			
                <td class="text-center">{{ $tag->id }}</td>
                <td class="text-center">{{ $tag->nome }}</td>  
                <td class="text-center">														
                <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-info">Detail</a>
                </td>							
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop