<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

use App\Http\Controllers\PessoaController;
use App\Http\Controllers\VeiculoController;
use App\Http\Controllers\RevisaoController;
use App\Http\Controllers\RelatorioController;

Route::resource('pessoas', PessoaController::class);
Route::resource('veiculos', VeiculoController::class);
Route::resource('revisoes', RevisaoController::class);
Route::get('/relatorios/veiculos', [RelatorioController::class, 'veiculosPorProprietario'])->name('relatorios.veiculos');
Route::get('/revisoes/create', [RevisaoController::class, 'create'])->name('revisoes.create');

