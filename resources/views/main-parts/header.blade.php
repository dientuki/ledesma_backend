<header class="container-fluid">
  <h1 class="display-2">{{ isset($name) ? $name : 'Login' }}</h1>

  <a class="nav-link"  href="{{ route('user::logout') }}">Salir</a>

</header>
