<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Pessoa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}"></script>
</head>
<body>
    <div class="container"> 
        <h1>Editar Pessoa</h1>

        <form action="{{ route('pessoas.update', $pessoa) }}" method="POST">
            @csrf
            @method('PUT')
            <div>
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" value="{{ $pessoa->nome }}" required>
            </div>
            <div>
                <label for="telefone">Telefone:</label>
                <input type="text" name="telefone" id="telefone" value="{{ $pessoa->telefone }}" required>
            </div>
            <div>
                <label for="genero">Gênero:</label>
                <select name="genero" required>
                    <option value="">Selecione um gênero</option>
                    <option value="Masculino" {{ ($pessoa->genero == 'Masculino') ? 'selected' : '' }}>Masculino</option>
                    <option value="Feminino" {{ ($pessoa->genero == 'Feminino') ? 'selected' : '' }}>Feminino</option>
                </select>
            </div>
            <div>
                <label for="idade">Idade:</label>
                <input type="number" name="idade" id="idade" value="{{ $pessoa->idade }}">
            </div>
            <button type="submit">Atualizar Pessoa</button>
        </form>
        <a href="{{ route('pessoas.index') }}">Voltar</a>
    </div>
</body>
</html>
