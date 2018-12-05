@extends('layouts.admin')

@section ('content')

  @foreach ($errors->all() as $message)
    {{ $message }}
  @endforeach

  {!! Form::model($point, array_merge($form_data, array('role' => 'form', 'class' => 'form-two-col'))) !!}

  <fieldset>

    <div class="form-group">
      {!! Form::label('team', 'Equipo')  !!}

        {!! Form::text('team', null, array('disabled' => 'disabled', 'class'=>'form-control'))  !!}
    </div>

    <div class="form-group">
      {!! Form::label('game', 'Juego')  !!}

        {!! Form::text('game', null, array('disabled' => 'disabled', 'class'=>'form-control'))  !!}
    </div>


    <div class="form-group {{ $errors->has('point') ? ' has-error' : '' }}">
      {!! Form::label('point', 'Puntos')  !!}

        {!! Form::number('point', null, array('required' => true, 'class'=>'form-control') ) !!}

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