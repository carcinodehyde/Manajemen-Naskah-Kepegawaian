@extends('_layouts/default')

@section('style')

@stop

@section('content')
  <div id="loginbox">
  <fieldset>
  <div id="box">
        <div id='notification' class='information'>
      <p>
         <img src='{{ asset('assets/img/information.png') }}' alt=''/> Silahkan masukkan username dan password anda!..
      </p>
    </div>
          <form method="post" action="{{ route('signin') }}" class="form-horizontal">
    <!-- CSRF Token -->
    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

    <!-- Email -->
    <div class="control-group{{ $errors->first('email', ' error') }}">
      <label class="control-label" for="email">Email</label>
      <div class="controls">
        <input class="inputbox" type="text" name="email" id="email" value="{{ Input::old('email') }}" />
        {{ $errors->first('email', '<span class="help-block">:message</span>') }}
      </div>
    </div>

    <!-- Password -->
    <div class="control-group{{ $errors->first('password', ' error') }}">
      <label class="control-label" for="password">Password</label>
      <div class="controls">
        <input class="inputbox" type="password" name="password" id="password" value="" />
        {{ $errors->first('password', '<span class="help-block">:message</span>') }}
      </div>
    </div>

    <!-- Remember me -->
    <div class="control-group">
      <div class="controls">
      <label class="checkbox">
        <input type="checkbox" name="remember-me" id="remember-me" value="1" /> Remember me
      </label>
      </div>
    </div>

    <hr>

    <!-- Form actions -->
    <div class="control-group">
      <div class="controls">
        <a class="btn" href="{{ route('home') }}">Batal</a> &nbsp;&nbsp;

        <button type="submit" class="btn">Masuk</button> &nbsp;&nbsp;

        <a href="{{ route('forgot-password') }}" class="btn btn-link">Lupa Password</a>
      </div>
    </div>
  </form>
  </div>

  </fieldset>
  </div>
@stop