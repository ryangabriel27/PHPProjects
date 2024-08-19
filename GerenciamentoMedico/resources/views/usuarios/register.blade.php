@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Registrar-se</h1>
    <form method="POST" action="{{ route('usuarios.register') }}">
        @csrf
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" required>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="mb-3">
                <label for="password_confirmation" class="form-label">Confirme a Senha</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo de Usuário</label>
                <select class="form-control" id="tipo" name="tipo" required>
                    <option value="paciente" {{ old('tipo') == 'paciente' ? 'selected' : '' }}>Paciente</option>
                    <option value="medico" {{ old('tipo') == 'medico' ? 'selected' : '' }}>Médico</option>
                </select>
            </div>
        <button type="submit" class="btn btn-primary">Registrar-se</button>
    </form>
</div>

@endsection
