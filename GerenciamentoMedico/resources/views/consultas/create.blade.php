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
            <label for="hora">Hora:</label>
            <input type="time" name="hora" class="form-control" value="{{ old('hora') }}" required>
        </div>

        <div class="form-group">
            <label for="descricao">Especialidade:</label>
            <input name="especialidade" class="form-control" placeholder="Descrição" value="{{ old('especialidade') }}" required>
        </div>

        <div class="form-group">
            <label for="medico_id">Médico:</label>
            <input type="text" name="medico_id" class="form-control" placeholder="Médico" value="{{Auth::user()->id}}" readonly>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
