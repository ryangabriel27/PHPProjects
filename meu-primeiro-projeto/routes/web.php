<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;

Route::get('/', function () {
    return view('home');
});
Route::get('/contatos', function () {
    return view('contatos');
});

Route::get('/hello', function () {
    return view('helloworld');
});

Route::get('/produtos', [ProdutoController::class, 'index']);
