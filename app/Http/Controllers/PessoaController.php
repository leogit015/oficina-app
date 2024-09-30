<?php

namespace App\Http\Controllers;

use App\Models\Pessoa;
use Illuminate\Http\Request;

class PessoaController extends Controller
{
    public function index()
    {
        $pessoas = Pessoa::all();
        return view('pessoa.index', compact('pessoas'));
    }

    public function create()
    {
        return view('pessoa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'genero' => 'nullable',
            'idade' => 'nullable|integer',
        ]);

        Pessoa::create($request->only(['nome', 'telefone', 'genero', 'idade']));
        return redirect()->route('pessoas.index')->with('success', 'Pessoa criada com sucesso.');
    }

    public function edit(Pessoa $pessoa)
    {
        return view('pessoa.edit', compact('pessoa'));
    }

    public function update(Request $request, Pessoa $pessoa)
    {
        $request->validate([
            'nome' => 'required',
            'telefone' => 'required',
            'genero' => 'nullable',
            'idade' => 'nullable|integer',
        ]);

        $pessoa->update($request->only(['nome', 'telefone', 'genero', 'idade']));
        return redirect()->route('pessoas.index')->with('success', 'Pessoa atualizada com sucesso.');
    }

    public function destroy(Pessoa $pessoa)
    {
        $pessoa->delete();
        return redirect()->route('pessoas.index')->with('success', 'Pessoa deletada com sucesso.');
    }
}
