<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
				<h1 class="text-primary">Controle de Tarefas</h1>
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
</body>