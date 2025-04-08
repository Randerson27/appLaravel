<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RelatorioController;

/*Rota de acesso a home*/
Route::get('/', function(){
    return view('site/home');
});

/*Rota de acesso a sobre*/
Route::get('/sobre', function(){
    return view('site/sobre');
});
/*Rota de acesso a div projeto*/
Route::get('/projeto', function(){
    return view('site/home');
});

/*Rotas de acesso a home*/
Route::resource('home', ProjetoController::class);
Route::resource('projeto', ProjetoController::class);
Route::resource('avaliacoes', AvaliacaoController::class);
Route::resource('relatorios', RelatorioController::class);

/*Rotas de acesso a contato*/
Route::resource('clientes', ClienteController::class);
Route::resource('contato', ClienteController::class);

