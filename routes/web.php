<?php

use App\Http\Controllers\PessoalController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pessoas', [PessoalController::class, 'showAll']);
Route::get('/pessoas/novo', [PessoalController::class, 'compose']);
Route::post('/pessoas/novo', [PessoalController::class, 'store']);

Route::post('/pessoas/edit', [PessoalController::class, 'edit']);
Route::post('/pessoas/update', [PessoalController::class, 'update']);
Route::post('/pessoas/delete', [PessoalController::class, 'delete']);