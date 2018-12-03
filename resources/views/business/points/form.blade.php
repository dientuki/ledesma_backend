@extends('layouts.admin')

@section ('content')

  @foreach ($errors->all() as $message)
    {{ $message }}
  @endforeach

  {!! Form::model($point, array_merge($form_data, array('role' => 'form', 'class' => 'form-two-col'))) !!}

  <fieldset>

    <div class="form-item">
      {!! Form::label('team', 'Equipo', array('class' => 'label form-colaside'))  !!}

      <div class="form-colmain">
        {!! Form::text('team', null, array('disabled' => 'disabled', 'class'=>'text-box'))  !!}
      </div>
    </div>

    <div class="form-item">
      {!! Form::label('game', 'Juego', array('class' => 'label form-colaside'))  !!}

      <div class="form-colmain">
        {!! Form::text('game', null, array('disabled' => 'disabled', 'class'=>'text-box'))  !!}
      </div>
    </div>


    <div class="form-item {{ $errors->has('point') ? ' has-error' : '' }}">
      {!! Form::label('point', 'Puntos', array('class' => 'label form-colaside'))  !!}

      <div class="form-colmain">
        {!! Form::number('point', null, array('required' => true, 'class'=>'text-box') ) !!}

        @if ($errors->has('point'))
          <span class="help-block"><strong>{{ $errors->first('point') }}</strong></span>
        @endif
      </div>
    </div>

  </fieldset>

  <div class="form-action">
    <input class="form-action-element button-submit" type="submit" value="Actualizar">
  </div>


  {!! Form::close() !!}

@endsection