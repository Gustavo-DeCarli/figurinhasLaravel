<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FigurinhasController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/figurinhas', [FigurinhasController::class, 'index']);
Route::get('/figurinhas/{id}/fshow', [FigurinhasController::class, 'showf'])->where('id','[0-9]+');
Route::get('/figurinhas/fcreate', [FigurinhasController::class, 'createf']);
Route::post('/figurinhas/fstore', [FigurinhasController::class, 'storef']);
Route::get('/figurinhas/{id}/fedit', [FigurinhasController::class, 'editf']);
Route::post('/figurinhas/fupdate', [FigurinhasController::class, 'updatef']);
Route::get('/figurinhas/{id}/fdestroy', [FigurinhasController::class, 'destroyf']);
