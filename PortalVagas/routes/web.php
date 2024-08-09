<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

// Exibir o formulário de login
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->name('usuarios.login');

// Processar o login do usuário
Route::post('/login', [UsuarioController::class, 'usuarios.login']);

// Exibir o formulário de registro
Route::get('/register', [UsuarioController::class, 'showRegisterForm'])->name('usuarios.register');

// Processar o registro de um novo usuário
Route::post('/register', [UsuarioController::class, 'usuarios.register']);

// Realizar o logout do usuário
Route::post('/logout', [UsuarioController::class, 'logout'])->name('usuarios.logout');

// Definir a rota para o dashboard (exemplo)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

