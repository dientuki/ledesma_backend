@extends('layouts.admin')

@section ('content')

  @if (isset($points))
    <table class="table table-striped table-bordered table-hover table-sm ">
      <thead class="thead-dark">
      <tr>
        <th>Equipo</th>
        <th>Juego</th>
        <th>Puntaje</th>
        <th class="column-action">Accion</th>
      </tr>
      </thead>
      <tbody>
      @foreach ($points as $point)
        <tr>
          <td>{{ $point->team }}</td>
          <td>{{ $point->game }}</td>
          <th scope="row">{{ $point->point }}</th>

          <td class="column-action">
            <a href="{{route('company::games::edit', $point->id)}}">Editar</a>
          </td>

        </tr>
      @endforeach
      </tbody>
    </table>
  @endif
  
  <script type="text/javascript" src="/js/socket.js"></script>
<script>
  const socket = io.connect('http://mateclass.com:5000');
      
      socket.emit('refresh', {id: '{{ $company }}' });
</script>

@endsection
