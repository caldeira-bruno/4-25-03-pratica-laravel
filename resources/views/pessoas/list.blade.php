<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pessoas</title>
</head>
<body>
    <h1>Lista de Pessoas</h1>
    <a href="/pessoas">Lista</a><br>
    <a href="/pessoas/novo">Novo</a>
    <hr>
    <table border="1">
        <thead>
            <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Endereço</th>
            <th colspan="2">Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach($lista as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->nome }}</td>
                    <td>{{ $p->email }}</td>
                    <td>{{ $p->endereco }}</td>
                    <td>
                        <form action="/pessoas/edit" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$p->id}}">
                            <button>Editar</button>
                        </form>
                    </td>
                    <td>
                        <form action="/pessoas/delete" method="POST">
                            @csrf
                            <input type="hidden" name="id" value="{{$p->id}}">
                            <button>Apagar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>