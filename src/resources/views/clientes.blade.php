<html>
    <head>
        <title>Listar os arquivos</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Idade</th>
            </tr>
            @foreach($clientes as $cliente)
            <tr>
                <td>{{ $cliente->clienteid}}</td>
                <td>{{ $cliente->nome}}</td>
                <td>{{ $cliente->idade}}</td>
            </tr>
            @endforeach
        </table>
    </body>
</html>