<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\ConsultaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Middleware\ConsultaMiddleware;
use App\Models\Consulta;

// Rota para exibir a homePage
Route::get('',[HomeController::class,'index'])
->name('home');

// Exibir o formulário de login
Route::get('/login', [UsuarioController::class, 'showLoginForm'])->name('usuarios.login');

// Processar o login do usuário
Route::post('/login', [UsuarioController::class, 'login'])->name('usuarios.login');

// Rota para exibir o formulário de registro
Route::get('/register', [UsuarioController::class, 'showRegisterForm'])->
name('usuarios.register');

// Rota para processar o registro
Route::post('/register', [UsuarioController::class, 'register'])->
name('usuarios.register');

// Realizar o logout do usuário
Route::post('/logout', [UsuarioController::class, 'logout'])->name('usuarios.logout');

// Rota para o dashboard, protegida por autenticação
Route::get('/dashboard', [DashboardController::class, 'index'])
->middleware('auth')->name('dashboard');

Route::get('/dashboard/minhas-consultas', [DashboardController::class, 'minhasConsultas'])->name('dashboard.minhasConsultas');

Route::resource('/consultas',ConsultaController::class)->middleware(ConsultaMiddleware::class)->except('show');

// Visualização de um produto específico
Route::get('consultas/{consulta}', [ConsultaController::class, 'show'])
->middleware('auth')->name('consultas.show');

Route::post('agenda/add/{consulta}', [AgendaController::class, 'add'])
->middleware('auth')->name('agenda.add');

