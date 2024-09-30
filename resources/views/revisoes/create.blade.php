<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar Revisão</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>Adicionar Nova Revisão</h1>

        <form action="{{ route('revisoes.store') }}" method="POST" class="form-style"> 
            @csrf
            <div class="form-group">
                <label for="data_revisao">Data da Revisão:</label>
                <input type="date" name="data_revisao" id="data_revisao" class="input-field" required>
            </div>

            <div class="form-group">
                <label for="veiculo_id">Veículo:</label>
                <select name="veiculo_id" id="veiculo_id" class="input-field" required>
                    <option value="">Selecione o veículo</option>
                    @foreach($veiculos as $veiculo)
                        <option value="{{ $veiculo->id }}">{{ $veiculo->modelo }} - {{ $veiculo->placa }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
    <label for="pessoa_id">Proprietário:</label>
    <select name="pessoa_id" id="pessoa_id">
        @foreach($pessoas as $pessoa)
            <option value="{{ $pessoa->id }}" {{ (isset($revisao) && $revisao->pessoa_id == $pessoa->id) ? 'selected' : '' }}>
                {{ $pessoa->nome }}
            </option>
        @endforeach
    </select>
</div>




            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" class="input-field textarea-field" required></textarea>
            </div>

            <div class="form-group">
                <label for="km_atual">KM Atual:</label> 
                <input type="number" name="km_atual" id="km_atual" class="input-field" required>
            </div>

            <button type="submit" class="btn">Adicionar Revisão</button>
        </form>

        <a href="{{ route('revisoes.index') }}" class="btn">Voltar</a>
    </div>
</body>
</html>