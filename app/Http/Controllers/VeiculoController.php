<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use App\Models\Pessoa;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    public function index()
    {
        $veiculos = Veiculo::with('pessoa')->get();
        return view('veiculos.index', compact('veiculos'));
    }

    public function create()
    {
        $pessoas = Pessoa::all(); 
        return view('veiculos.create', compact('pessoas'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required',
            'pessoa_id' => 'required|exists:pessoas,id'
        ]);

        Veiculo::create($request->all());
        return redirect()->route('veiculos.index')->with('success', 'Veículo criado com sucesso.');
    }

    public function edit(Veiculo $veiculo)
    {
        $pessoas = Pessoa::all();
        return view('veiculos.edit', compact('veiculo', 'pessoas'));
    }

    public function update(Request $request, Veiculo $veiculo)
    {
        $request->validate([
            'marca' => 'required',
            'modelo' => 'required',
            'ano' => 'required',
            'pessoa_id' => 'required|exists:pessoas,id'
        ]);

        $veiculo->update($request->all());
        return redirect()->route('veiculos.index')->with('success', 'Veículo atualizado com sucesso.');
    }

    public function destroy(Veiculo $veiculo)
    {
        $veiculo->delete();
        return redirect()->route('veiculos.index')->with('success', 'Veículo deletado com sucesso.');
    }
}
