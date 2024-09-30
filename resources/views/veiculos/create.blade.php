<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Veículo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Criar Novo Veículo</h1>

        <form action="{{ route('veiculos.store') }}" method="POST">
            @csrf
            <div>
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" required>
            </div>
            <div>
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" required>
            </div>
            <div>
                <label for="ano">Ano:</label>
                <input type="number" name="ano" id="ano" required>
            </div>
            <div>
                <label for="placa">Placa:</label>
                <input type="text" name="placa" id="placa" required>
            </div>
            <div>
                <label for="pessoa_id">Proprietário:</label>
                <select name="pessoa_id" id="pessoa_id" required>
                    <option value="">Selecione um proprietário</option>
                    @foreach($pessoas as $pessoa)
                        <option value="{{ $pessoa->id }}">{{ $pessoa->nome }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn">Criar Veículo</button>
        </form>
        <a href="{{ route('veiculos.index') }}" class="btn">Voltar</a>
    </div>
</body>
</html>
