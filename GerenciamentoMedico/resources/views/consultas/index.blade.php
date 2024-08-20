@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="my-4">Minhas Consultas - {{ Auth::user()->nome}}</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <a class="btn btn-success mb-2" href="{{ route('consultas.create') }}"> Criar Nova Consulta</a>

        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Horario</th>
                <th>Data</th>
                <th>Especialidade</th>
                <th>Médico</th>
                <th>Paciente</th>
                <th width="280px">Ação</th>
            </tr>
            @foreach ($consultas as $consulta)
            <tr>
                <td>{{ $consulta->id }}</td>
                <td>{{ $consulta->horario }}</td>
                <td>{{ $consulta->data }}</td>
                <td>{{ $consulta->especialidade}}</td>
                <td>{{ $consulta->medico->nome }}</td>
                <td>@if($consulta->agendas->isEmpty())
                        Nenhum paciente agendado
                    @else
                            @foreach($consulta->agendas as $agenda)
                                {{ $agenda->usuario->nome }}
                            @endforeach
                    @endif</td>
                <td>
                    <form action="{{ route('consultas.destroy', $consulta->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('consultas.edit', $consulta->id) }}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Deletar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
@endsection
