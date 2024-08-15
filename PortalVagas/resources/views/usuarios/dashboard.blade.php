@extends('layouts.master')

@section('content')
<div class="container">
    <h2>Dashboard - {{Auth::user()->tipo}}</h2>

    <form action="{{route('usuarios.logout')}}" method="post">
        @csrf
        <input type="submit" value="Sair">
    </form>
</div>
@endsection
