@extends('layouts.app')


@section('content')
<div class="container">
    <h1>Login</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <form method="POST" action="{{ route('usuarios.login') }}">
        @csrf


        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" placeholder="Seu e-mail" required autofocus>
        </div>


        <div class="form-group">
            <label for="password">Senha</label>
            <input type="password" name="password" class="form-control" placeholder="Sua senha" required>
        </div>


        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
@endsection
