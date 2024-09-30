<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Bem-vindo ao Sistema de Controle de Veículos</h1>

        <div class="button-group">
            <a href="{{ route('pessoas.index') }}" class="btn">Gerenciar Pessoas</a>
            <a href="{{ route('veiculos.index') }}" class="btn">Gerenciar Veículos</a>
            <a href="{{ route('revisoes.index') }}" class="btn">Gerenciar Revisões</a>
        </div>
    </div>
</body>
</html>
