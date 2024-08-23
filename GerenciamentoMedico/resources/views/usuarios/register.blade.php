@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Registrar-se</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST" action="{{ route('usuarios.register') }}">
        @csrf

        <div class="mb-3">
            <label for="tipo" class="form-label">Tipo de Usuário</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="paciente" {{ old('tipo') == 'paciente' ? 'selected' : '' }}>Paciente</option>
                <option value="medico" {{ old('tipo') == 'medico' ? 'selected' : '' }}>Médico</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}" placeholder="Seu nome completo" required>
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="{{ old('cpf') }}" placeholder="Seu CPF (somente números)" maxlength="11" oninput="this.value = this.value.replace(/[^0-9]/g, '')" required>
        </div>

        <div class="mb-3">
            <label for="cep" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{ old('cidade') }}" placeholder="Cidade.." required>
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">Estado</label>
            <input type="text" class="form-control" id="estado" maxlength="2" name="estado" value="{{ old('estado') }}" placeholder="UF" required>
        </div>
        <div class="mb-3">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control" id="cep" name="cep" value="{{ old('cep') }}" maxlength="9" oninput="this.value = this.value.replace(/[^0-9]/g, '')" placeholder="Seu CEP (somente números)" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Seu e-mail"  required>
        </div>

        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Senha.." required>
        </div>

        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirme a Senha</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmar senha.." required>
        </div>


        <div class="mb-3" id="crm-field" style="display: none;">
            <label for="crm" class="form-label">CRM</label>
            <input type="text" class="form-control" id="crm" name="crm" value="{{ old('crm') }}" maxlength="4" placeholder="Sua CRM (somente números)">
        </div>

        <button type="submit" class="btn btn-primary">Registrar-se</button>
    </form>
</div>

<script>
    document.getElementById('tipo').addEventListener('change', function() {
        var crmField = document.getElementById('crm-field');
        if (this.value === 'medico') {
            crmField.style.display = 'block';
        } else {
            crmField.style.display = 'none';
        }
    });

    // Trigger the change event on page load in case "medico" is selected by default
    document.getElementById('tipo').dispatchEvent(new Event('change'));

    function formatar(mascara, documento) {
        let i = documento.value.length;
        let saida = '#';
        let texto = mascara.substring(i);
        while (texto.substring(0, 1) != saida && texto.length) {
            documento.value += texto.substring(0, 1);
            i++;
            texto = mascara.substring(i);
        }
    }
</script>
@endsection