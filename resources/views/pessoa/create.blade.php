<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Pessoa</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    
    <div class="container" id="app">
        <pessoa-create>
        <h1>Criar Nova Pessoa</h1>

            <form action="{{ route('pessoas.store') }}" method="POST">
                @csrf
                <div>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <div>
                    <label for="telefone">Telefone:</label>
                    <input type="text" name="telefone" id="telefone" required>
                </div>
                <div>
                    <label for="genero">Gênero:</label>
                    <select name="genero" required>
                        <option value="">Selecione um gênero</option>
                        <option value="Masculino" {{ (isset($pessoa) && $pessoa->genero == 'Masculino') ? 'selected' : '' }}>Masculino</option>
                        <option value="Feminino" {{ (isset($pessoa) && $pessoa->genero == 'Feminino') ? 'selected' : '' }}>Feminino</option>
                </select>
    </div>
    <div>
        <label for="idade">Idade:</label>
        <input type="number" name="idade" id="idade">
    </div>
    <button type="submit">Criar Pessoa</button>
</form>
<a href="{{ route('pessoas.index') }}">Voltar</a>

        </pessoa-create> 
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>

