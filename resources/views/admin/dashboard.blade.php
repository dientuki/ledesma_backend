<!DOCTYPE html>
<html lang="es">
<head>
  @include ('main-parts/head')
</head>

<body>
@include ('main-parts/header')
@include ('widgets/alerts')

<main class="container-fluid">
    <form action="#" id="form">
      <div class="form-group">
        <input type="radio" name="screen" id="init" value="/"/><label for="init">Pantalla de bienvenida</label>
      </div>
      <div class="form-group">
        <input type="radio" name="screen" id="global" value="/global"/><label for="global">Resultados por empresa</label>
      </div>
      <div class="form-group">
        <input type="radio" name="screen" id="perteam"  value="/company/:id"/><label for="perteam">Resultados Por equipo</label>
      </div>
      <div class="form-group">
        <input type="radio" name="screen" id="pause" value="/pause" /><label for="pause">Juego en Pausa</label>
      </div>
      <div class="form-group">
        <input type="radio" name="screen" id="result" value="/company/:id/result" /><label for="result">Ganadores finales</label>
      </div>
      <div class="form-group">
        <input type="radio" name="screen" id="end" value="/finish"/><label for="end">Fin del juego</label>
      </div>
    </form>
</main>

@include ('main-parts/footer')
<script type="text/javascript" src="/js/socket.js"></script>
<script>
  const socket = io.connect('http://mateclass.com:5000'),
          radios = document.querySelectorAll('form input');

  Array.from(radios).forEach((radio) => {
    radio.addEventListener('click', (e) => {
      socket.emit('change', {page: radio.value});
      if (radio.value == '/global') {
        Array.from(radios).forEach((dis) => {
          dis.disabled = true;
        });

        setTimeout(() => {
          Array.from(radios).forEach((dis) => {
                  dis.disabled = false;
          });
          document.querySelector('#perteam').checked = true;
          document.querySelector('#perteam').dispatchEvent(new Event('click'));
        }, 1000*10);
      }
  });
  });

</script>

</body>

</html>
