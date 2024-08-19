<ul class="nav justify-content-center">
  @if(Auth::check())
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/">Home</a>
    </li>
    @if(Auth::user()->tipo === 'medico')
    <li class="nav-item">
      <a class="nav-link" href="/consultas">Verificar Agenda</a>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="/consultas">Buscar consultas</a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="">Logado como {{ Auth::user()->tipo }}</a>
    </li>
    <form action="{{route('usuarios.logout')}}" method="post">
      @csrf
      <input type="submit" value="Logout" class="nav-item">
    </form>
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