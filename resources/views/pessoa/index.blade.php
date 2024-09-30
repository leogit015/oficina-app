<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, content-scale=1.0">
    <title>Lista de Pessoas</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Lista de Pessoas</h1>

        <div class="button-group" >
        <a href="{{ route('pessoas.create') }}" class="btn add-btn">Nova pessoa</a>
        <a href="{{ route('home') }}" class="btn">Página Inicial</a>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>Gênero</th>
                    <th>Idade</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pessoas as $pessoa)
                <tr>
                    <td>{{ $pessoa->nome }}</td>
                    <td>{{ $pessoa->telefone }}</td>
                    <td>{{ $pessoa->genero }}</td>
                    <td>{{ $pessoa->idade }}</td>
                    <td>
                        <div class="button-group">
                            <a href="{{ route('pessoas.edit', $pessoa) }}" class="btn">Editar</a>
                            <form action="{{ route('pessoas.destroy', $pessoa) }}" method="POST" style="display:inline;" >
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn">Deletar</button>
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
