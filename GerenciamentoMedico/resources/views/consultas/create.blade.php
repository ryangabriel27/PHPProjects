@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="my-4">Criar Consulta</h1>

    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('consultas.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="data">Data:</label>
            <input type="date" name="data" class="form-control" value="{{ old('data') }}" required>
        </div>

        <div class="form-group">
            <label for="horario">Hora:</label>
            <input type="time" name="horario" class="form-control" value="{{ old('horario') }}" required>
        </div>

        <div class="form-group">
            <label for="especialidade">Especialidade:</label>
            <input name="especialidade" class="form-control" placeholder="Especialidade" value="{{ old('especialidade') }}" required>
        </div>

        <div class="form-group">
            <label for="especialidade">Localidade:</label>
            <input name="localidade" class="form-control" placeholder="Cidade-Estado" value="{{ old('localidade') }}" required>
        </div>

        <input type="hidden" name="medico_id" value="{{ Auth::user()->id }}">

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection