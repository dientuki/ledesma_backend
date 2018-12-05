@extends('layouts.login')

@section('content')

    <div class="login-box block-aside-center">

        <form class="login-form" role="form" method="POST" action="{{ route('user::login.post') }}">
            {{ csrf_field() }}

            <div class="form-group ">Favor de loguearse antes de entrar</div>

            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                <label class="label"  for="email">E-Mail</label>

                <div>
                    <input id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                <label class="label"  for="password" class="col-md-4 control-label">Password</label>

                <div>
                    <input id="password" type="password" class="form-control" name="password" required>

                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                </div>
            </div>

            <div class="form-action clearfix">
                <input class="button-submit" type="submit" value="Ingresar">
            </div>

        </form>

    </div>

@endsection
