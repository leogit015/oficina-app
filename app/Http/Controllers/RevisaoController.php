<?php

namespace App\Http\Controllers;

use App\Models\Revisao;
use App\Models\Veiculo;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class RevisaoController extends Controller
{
    public function index()
    {
        $revisoes = Revisao::with('veiculo.pessoa')->get();
        return view('revisoes.index', compact('revisoes'));
    }

    public function create()
{
    
    $veiculos = Veiculo::all();
    $pessoas = Pessoa::all();

   
    return view('revisoes.create', compact('veiculos', 'pessoas'));
}


    public function store(Request $request)
    {
        $request->validate([
            'data_revisao' => 'required|date',
            'descricao' => 'required',
            'pessoa_id' => 'required|exists:pessoa_id',
            'veiculo_id' => 'required|exists:veiculos,id',
            'km_atual' => 'required|integer',
        ]);

        Revisao::create($request->all());
        return redirect()->route('revisoes.index')->with('success', 'Revisão criada com sucesso.');
    }

    public function edit($id)
{

    $revisao = Revisao::findOrFail($id);
    $pessoas = Pessoa::all();
    $veiculos = Veiculo::all();
    return view('revisoes.edit', compact('revisao', 'pessoas', 'veiculos'));
}

    public function update(Request $request, Revisao $revisao)
    {
        $request->validate([
            'data_revisao' => 'required|date',
            'descricao' => 'required',
            'km_atual' => 'required|integer',
            'pessoa_id' => 'required|exists:pessoa_id',
            'veiculo_id' => 'required|exists:veiculos,id',
        ]);

        $revisao->update($request->all());
        return redirect()->route('revisoes.index')->with('success', 'Revisão atualizada com sucesso.');
    }

    public function destroy(Revisao $revisao)
    {
        $revisao->delete();
        return redirect()->route('revisoes.index')->with('success', 'Revisão deletada com sucesso.');
    }
}

