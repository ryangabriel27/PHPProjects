<ul class="nav justify-content-center">
  @if(Auth::check())
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/login">Logout</a>
  </li>
  @if (
  request() //captura os dados da requisição
  ->user() //captura o usuario que fez a requisição
  ->where('tipo','empresa') // a partir de model binding ele procura se o tipo é empresa
  ->first() //transforma o resultado da consulta em um valor boolean, retornando true or false
  )
  <li class="nav-item">
    <a class="nav-link" href="">Cadastrar Vagas</a>
  </li>
  @else
  <li class="nav-item">
        <a class="nav-link" href="">Buscar vagas</a>
      </li>
  @endif
  @else
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/login">Login</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="/register">Register</a>
  </li>
  @endif
</ul>

<div class="container-flex">


</div>