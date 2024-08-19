@extends('layouts.app')


@section('content')
    <div class="container">
        <h1 class="my-4">Consultas</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <a class="btn btn-success mb-2" href="{{ route('consultas.create') }}"> Criar Nova Consulta</a>

        <table class="table table-bordered">
            <tr>
                <th>ID</th>
                <th>Horario</th>
                <th>Data</th>
                <th>Especialidade</th>
                <th>Médico</th>
                <th width="280px">Ação</th>
            </tr>
            @foreach ($consultas as $consulta)
            <tr>
                <td>{{ $consulta->id }}</td>
                <td>{{ $consulta->horario }}</td>
                <td>{{ $consulta->data }}</td>
                <td>{{ $consulta->especialidade}}</td>
                <td>{{ $consulta->medico_id }}</td>
                <td>
                    <form action="{{ route('consulta$consultas.destroy', $consulta->id) }}" method="POST">
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
