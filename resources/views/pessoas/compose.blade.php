<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Pessoas</title>
</head>
<body>
    <h1>Cadastro de Pessoas</h1>
    <a href="/pessoas">Lista</a><br>
    <a href="/pessoas/novo">Novo</a>
    <hr>
    <form action="{{ isset($pessoa) ? '/pessoas/update' : '/pessoas/novo' }}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $pessoa->id ?? '' }}">


        <label for="nome">Nome:</label>
        <input type="text" name="nome" id="nome" value="{{ $pessoa->nome ?? '' }}"><br>

        <label for="nome">Email:</label>
        <input type="email" name="email" id="email" value="{{ $pessoa->email ?? '' }}"><br>

        <label for="nome">Endereço:</label>
        <input type="text" name="endereco" id="endereco" value="{{ $pessoa->endereco ?? '' }}"><br>

        <br>
        <button>Salvar</button>
    </form>
</body>
</html>