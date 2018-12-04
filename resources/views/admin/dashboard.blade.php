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
    <form action="#" id="form">
      <div class="form-item">
        <input type="radio" name="screen" id="init" value="/"/><label for="init">Inicio</label>
      </div>
      <div class="form-item">
        <input type="radio" name="screen" id="global" value="/global"/><label for="global">Global</label>
      </div>
      <div class="form-item">
        <input type="radio" name="screen" id="perteam"  value="/company/:id"/><label for="perteam">Por equipo</label>
      </div>
      <div class="form-item">
        <input type="radio" name="screen" id="pause" value="/pause" /><label for="pause">Pausa</label>
      </div>
      <div class="form-item">
        <input type="radio" name="screen" id="result" value="/company/:id/result" /><label for="result">Resultados</label>
      </div>
      <div class="form-item">
        <input type="radio" name="screen" id="end" value="/finish"/><label for="end">Fin</label>
      </div>
    </form>
  </div>
</main>

@include ('main-parts/footer')
<script type="text/javascript" src="/js/socket.js"></script>
<script>
  const socket = io.connect('http://localhost:5000'),
          radios = document.querySelectorAll('form input');
  
  Array.from(radios).forEach((radio) => {
    radio.addEventListener('click', (e) => {
      socket.emit('change', {page: radio.value});
      if (radio.value == '/global') {
        radio.disabled = true;
        setTimeout(() => {
          radio.disabled = false;
          document.querySelector('#perteam').checked = true;
          document.querySelector('#perteam').dispatchEvent(new Event('click'));
        }, 1000*10);
      }
  });
  });

</script>

</body>

</html>