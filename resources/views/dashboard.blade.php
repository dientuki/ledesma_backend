@extends('layouts.admin')

@section ('content')

  @if (isset($points))
    <table class="list-table" id="list-table">
      <thead class="hidden">
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
          <td>{{ $point->point }}</td>

          <td class="column-action">
            <a href="{{route('company::games::edit', $point->id)}}">Editar</a>
          </td>

        </tr>
      @endforeach
      </tbody>
    </table>
  @endif

@endsection