<ul class="nav justify-content-center">
  @if(Auth::check())
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="/">Home</a>
  </li>
  @if (Auth::user()->isPaciente())
  <li class="nav-item">
    <a class="nav-link" href="">Acessar o dashboard de vagas/a>
  </li>
  <!-- @else
  <li class="nav-item">
    <a class="nav-link" href="">Buscar vagas</a>
  </li> -->
  @endif
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