<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Veículos</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Veículos</h1>
        <div class="button-group" >
        <a href="{{ route('veiculos.create') }}" class="btn add-btn">Novo veículo</a>
        <a href="{{ route('home') }}" class="btn">Página Inicial</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Modelo</th>
                    <th>Marca</th>
                    <th>Ano</th>
                    <th>Placa</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($veiculos as $veiculo)
                <tr>
                    <td>{{ $veiculo->modelo }}</td>
                    <td>{{ $veiculo->marca }}</td>
                    <td>{{ $veiculo->ano }}</td>
                    <td>{{ $veiculo->placa }}</td>
                    <td>
                        <div class="button-group">
                            <a href="{{ route('veiculos.edit', $veiculo) }}" class="btn">Editar</a>
                            <form action="{{ route('veiculos.destroy', $veiculo) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete-btn">Deletar</button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</body>
</html>
