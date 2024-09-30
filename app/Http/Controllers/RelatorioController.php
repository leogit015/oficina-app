<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class RelatorioController extends Controller
{
    public function veiculosPorProprietario()
{
    // Consulta SQL para contar veículos por proprietário, usando o nome correto da coluna
    $veiculosPorProprietario = Veiculo::selectRaw('count(*) as total, pessoa_id')
                                      ->groupBy('pessoa_id')
                                      ->pluck('total', 'pessoa_id')->toArray();

    // Nome dos proprietários para as labels do gráfico
    $proprietarios = Pessoa::whereIn('id', array_keys($veiculosPorProprietario))
                           ->pluck('nome')->toArray();

    // Retorna a view com os dados para o gráfico
    return view('relatorios.grafico-veiculos', compact('proprietarios', 'veiculosPorProprietario'));
}
}
