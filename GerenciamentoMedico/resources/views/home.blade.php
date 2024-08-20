@extends('layouts.app')

@section('content')
<div class="container">
    <div id="consultaCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($consultas as $index => $consulta)
            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                <div class="carousel-caption d-none d-md-block">
                    <h5>{{ $consulta->especialidade }}</h5>
                    <p>Médico: {{ $consulta->medico->nome }}</p>
                    <p>Data: {{ \Carbon\Carbon::parse($consulta->data)->format('d/m/Y') }}</p>
                    <p>Hora: {{ \Carbon\Carbon::parse($consulta->horario)->format('H:i') }}</p>
                </div>
            </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#consultaCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#consultaCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection