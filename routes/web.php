<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FigurinhasController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/figurinhas', [FigurinhasController::class, 'index'])->name('figurinhas');
Route::get('/figurinhas/{id}/fshow', [FigurinhasController::class, 'showf'])->where('id','[0-9]+');
Route::get('/figurinhas/fcreate', [FigurinhasController::class, 'createf']);
Route::post('/figurinhas/fstore', [FigurinhasController::class, 'storef']);
Route::get('/figurinhas/{id}/fedit', [FigurinhasController::class, 'editf']);
Route::post('/figurinhas/fupdate', [FigurinhasController::class, 'updatef']);
Route::get('/figurinhas/{id}/fdestroy', [FigurinhasController::class, 'destroyf']);

Route::get('/figurinhasuser', [FigurinhasController::class, 'index']);

route::match(['get', 'post'] , '/cadastrar' , [CadastroController::class , 'index'])->name('index');
route::match(['get', 'post'] , '/cliente/cadastrar' , [CadastroController::class , 'cadastro'])->name('cadastro');
route::match(['get', 'post'] , '/login' , [UsuarioController::class , 'login'])->name('login');

Route::get('/logout', [UsuarioController::class, 'logout'])->name('logout');