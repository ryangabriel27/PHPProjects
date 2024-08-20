@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Especialidade: {{ $consulta->especialidade }}</h2>
                <p>Descrição: {{ $consulta->descricao }}</p>
                <p>Data: {{ \Carbon\Carbon::parse($consulta->data)->format('d/m/Y') }}</p>
                <p>Hora: {{ \Carbon\Carbon::parse($consulta->horario)->format('H:i') }}</p>
                <p>Médico: {{ $consulta->medico->nome }}</p>

                <form method="POST" action="{{ route('agenda.add', $consulta->id) }}">
                    @csrf
                    <button type="submit" class="btn btn-primary">Marcar Consulta</button>
                </form>
            </div>
        </div>
@endsection
   
