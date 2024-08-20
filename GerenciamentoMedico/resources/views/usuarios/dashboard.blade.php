@extends('layouts.app')

@section('content')
    <h1>Dashboard de Consultas</h1>

    <form method="GET" action="{{ route('dashboard') }}">
        <input type="text" name="search" placeholder="Pesquisar consultas..." value="{{ request('search') }}">
        <button type="submit">Pesquisar</button>
    </form>

    <div class="row">
        @foreach ($consultas as $consulta)
            <div class="col-md-4">
                <div class="card">
                    <img src="" class="card-img-top" alt="Consulta {{ $loop->iteration }}">
                    <div class="card-body">
                        <h5 class="card-title">Especialidade: {{ $consulta->especialidade }}</h5>
                        <p class="card-text">Médico: {{ $consulta->medico->nome }}</p>
                        <p class="card-text">Data: {{ \Carbon\Carbon::parse($consulta->data)->format('d/m/Y') }}</p>
                        <p class="card-text">Hora: {{ \Carbon\Carbon::parse($consulta->horario)->format('H:i') }}</p>
                        <a href="{{ route('consultas.show', $consulta->id) }}" class="btn btn-primary">Ver Consulta</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
