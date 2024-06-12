<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoControler;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/', function (){
    return '<h1>Primeiro projeto!</h1>';
});
Route::get('/produto',[ProdutoControler::class,'lista'])->name('lista');
Route::get('/produto/novo',[ProdutoControler::class,'novo'])->name('cadastrar');
Route::post('/produto/adicionar',[ProdutoControler::class,'adicionar'])->name('adicionar');
Route::get('/produto/mostrar/{id}',[ProdutoControler::class,'mostrar'])->where('id','[0-9]+')->name('buscar');
Route::post('/produto/atualizar/{id}',[ProdutoControler::class,'atualizar'])->name('atualizar');
Route::get('/produto/deletar/{id}',[ProdutoControler::class,'deletar'])->name('deletar');
