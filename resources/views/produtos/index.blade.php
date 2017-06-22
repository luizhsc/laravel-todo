<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8"/>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1" name="viewport">
        <title>Título da Página (Estrutura básica de uma página com HTML 5)</title>
        <link href="css/seu-stylesheet.css" rel="stylesheet"/>
        <script src="scripts/seu-script.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <header>
            <nav>
                <br>
                <ul>
                    <li>Home</li> 
                    <li>Produtos</li>     
                </ul>              
            </nav>
        </header>

        <section>
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>DESCRIÇÃO</th>   
                    <th>AÇÃO</th> 
                </tr>
                <button type="button" class="btn btn-success">Adicionar</button>
                <tr>
                    <td>123</td>
                    <td>teste</td>
                    <td>teste</td>
                    <td>
                        <a href="#" class="btn btn-primary"><span class="glyphicon glyphicon-pencil"></span></a>
                        <a href="#" class="btn btn-danger"><span class="glyphicon glyphicon-remove"></span></a>
                    </td>
                </tr>                
            </table>
        </section>
    </body>
</html>