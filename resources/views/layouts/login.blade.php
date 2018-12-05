<!DOCTYPE html>
<html lang="es">
  <head>
    @include ('main-parts/head')
  </head>

  <body class="login-page">
    @include ('main-parts/header')
    @include ('widgets/alerts')

    <main class="container-fluid">
          @yield('content')
      </main>

    @include ('main-parts/footer')
  	@include ('main-parts/script')
  	
  </body>

</html>