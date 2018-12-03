<!DOCTYPE html>
<html lang="es">
  <head>
    @include ('main-parts/head')
  </head>

  <body>
    @include ('main-parts/header')
    @include ('widgets/alerts')

    <main id="main">
      <div class="main-wrapper clearfix">
        @yield('content')
      </div>
    </main>

    @include ('main-parts/footer')
  	@include ('main-parts/script')
  	
  </body>

</html>