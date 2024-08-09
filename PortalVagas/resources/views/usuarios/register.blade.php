@extends('layouts.master')
@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Registro</div>
            <div class="card-body">
                <form method="POST" action="{{ url('/register') }}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nome</label>
                        <input type="text" id="nome" name="nome" class="form-control" value="{{ old('nome') }}" required>
                        @error('nome')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}" required>
                        @error('email')
                            <div class="alert alert-danger mt-2">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" id="password" name="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation">Confirme a Senha</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </form>
                <div class="mt-3">
                    <a href="{{ url('/login') }}">Já tem uma conta? Faça login</a>
                </div>
            </div>
        </div>
    </div>
</div>
