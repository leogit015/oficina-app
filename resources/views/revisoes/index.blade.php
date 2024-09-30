<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Revisões</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Revisões</h1>
        <div class="button-group" >
        <a href="{{ route('revisoes.create') }}" class="btn add-btn">Nova revisão</a>
        <a href="{{ route('home') }}" class="btn">Página Inicial</a>
        </div>

        <table>
            <thead>
                <tr>
                    <th>Data da Revisão</th>
                    <th>Veículo</th>
                    <th>Proprietário</th>
                    <th>Descrição</th>
                    <th>KM Atual</th> 
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($revisoes as $revisao)
                <tr>
                    <td>{{ $revisao->data_revisao }}</td>
                    <td>{{ $revisao->veiculo->modelo }} - {{ $revisao->veiculo->placa }}</td>
                    <td>{{ $revisao->pessoa ->nome  ?? 
                    'Proprietário não definido'}}</td>
                    <td>{{ $revisao->descricao }}</td>
                    <td>{{ $revisao->km_atual }}</td> 
                    <td>
                        <div class="button-group">
                            <a href="{{ route('revisoes.edit', $revisao) }}" class="btn">Editar</a>
                            <form action="{{ route('revisoes.destroy', $revisao) }}" method="POST" style="display:inline;">
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
