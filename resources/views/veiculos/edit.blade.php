<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Veículo</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Editar Veículo</h1>

        <form action="{{ route('veiculos.update', $veiculo) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="modelo">Modelo:</label>
                <input type="text" name="modelo" id="modelo" value="{{ $veiculo->modelo }}" required>
            </div>
            <div>
                <label for="marca">Marca:</label>
                <input type="text" name="marca" id="marca" value="{{ $veiculo->marca }}" required>
            </div>
            <div>
                <label for="ano">Ano:</label>
                <input type="number" name="ano" id="ano" value="{{ $veiculo->ano }}" required>
            </div>
            <div>
                <label for="placa">Placa:</label>
                <input type="text" name="placa" id="placa" value="{{ $veiculo->placa }}" required>
            </div>
            <div>
                <label for="pessoa_id">Proprietário:</label>
                <select name="pessoa_id" id="pessoa_id" required>
                    <option value="">Selecione um proprietário</option>
                    @foreach($pessoas as $pessoa)
                        <option value="{{ $pessoa->id }}" {{ $pessoa->id == $veiculo->pessoa_id ? 'selected' : '' }}>{{ $pessoa->nome }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn">Atualizar Veículo</button>
        </form>
        <a href="{{ route('veiculos.index') }}" class="btn">Voltar</a>
    </div>
</body>
</html>


