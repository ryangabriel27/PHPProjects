@extends('layouts.master')
@section('content')
{{-- Formulario --}}
{{-- formulario --}}
<div class="container">
    <h1>Registrar-se</h1>
    <form method="POST" action="{{ route('usuarios.register') }}">
        @csrf


        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome"  id="nome" class="form-control" required>
        </div>


        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>


        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>


        <div class="form-group">
            <label for="password_confirmation">Confirme a Senha</label>
            <input type="password" name="password_confirmation" class="form-control" required>
        </div>


        <button type="submit" class="btn btn-primary">Registrar-se</button>
    </form>
</div>

@endsection

