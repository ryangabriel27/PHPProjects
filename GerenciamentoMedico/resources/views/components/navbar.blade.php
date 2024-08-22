<ul class="nav justify-content-center">
  @if(Auth::check())
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/">Início</a>
    </li>
    @if(Auth::user()->tipo === 'medico')
    <li class="nav-item">
      <a class="nav-link" href="/consultas">Verificar Agenda</a>
    </li>
    @else
    <li class="nav-item">
      <a class="nav-link" href="/dashboard">Buscar consultas</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/dashboard/minhas-consultas">Minhas consultas agendadas</a>
    </li>
    @endif
    <li class="nav-item">
      <a class="nav-link" href="">Logado como {{ Auth::user()->tipo }}</a>
    </li>
    <form action="{{route('usuarios.logout')}}" method="post" class="navbar-form">
      @csrf
      <input type="submit" value="Sair" class="nav-item">
    </form>
  @else
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="/">Início</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/login">Faça seu login</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/register">Crie a sua conta</a>
    </li>
  @endif
</ul>