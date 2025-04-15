<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\ProjetoController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\ProdutoController;

/*Rota de acesso a home*/
// Route::get('/', function(){
//     return view('site/home');
// });

/*Rota de acesso a div projeto*/
Route::get('/projeto', function(){
    return view('site/home');
});

/*Rota de acesso a sobre*/
Route::get('/sobre', function(){
    return view('site/sobre');
});

/*Rota de acesso a Produto*/
Route::get('/produto/{slug}', function(){
    return view('site/details');
});



/*Rotas de acesso a home*/
Route::get('/', [SiteController::class, 'index'])->name('site.index');

Route::resource('home', ProjetoController::class);
Route::resource('projeto', ProjetoController::class);
Route::resource('avaliacoes', AvaliacaoController::class);
Route::resource('relatorios', RelatorioController::class);
// Route::resource('sobre', SobreController::class);

/*Rotas de acesso a contato*/
Route::resource('clientes', ClienteController::class);
Route::resource('contato', ClienteController::class);

/* Rotas de acesso a produto */
Route::resource('produto', ProdutoController::class);
Route::get('/produto/{slug}', [SiteController::class, 'details'])->name('site.details');
Route::get('/categoria/{id}', [SiteController::class, 'categoria'])->name('site.categoria');


