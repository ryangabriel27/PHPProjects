@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Minhas Consultas Agendadas</h2>

        @if($consultas->isEmpty())
            <p>Você não tem consultas agendadas no momento.</p>
        @else
            <table class="table table-bordered user-table">
                <thead>
                    <tr>
                        <th>Especialidade</th>
                        <th>Médico</th>
                        <th>Data</th>
                        <th>Hora</th>
                        <th>Localidade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($consultas as $agenda)
                        <tr>
                            <td>{{ $agenda->consulta->especialidade }}</td>
                            <td>{{ $agenda->consulta->medico->nome }}</td>
                            <td>{{ \Carbon\Carbon::parse($agenda->consulta->data)->format('d/m/Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($agenda->consulta->horario)->format('H:i') }}</td>
                            <td>{{ $agenda->consulta->localidade }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection

