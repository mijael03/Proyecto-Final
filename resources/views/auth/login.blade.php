@extends('layouts.app', ['class' => 'off-canvas-sidebar', 'activePage' => 'login', 'title' => __('Material Dashboard')])

  
@section('content')
    

<div class="container">
  <div class="row content">
    <div class="col-md-6 mb-3">
      <img src="img/img.svg" class="img-fluid" alt="image">
    </div>
    <div class="col-md-6">
      <h3 class="signin-text mb-3"> {{ __('Login') }}</h3>
      <form class="form" method="POST" action="{{ route('login') }}">
  @csrf
        <div class="form-group">
          <label for="email">Correo Electrónico</label>
          <input type="email" name="email" class="form-control" placeholder="{{ __('Email...') }}" value="{{ old('email', 'admin@material.com') }}" required>
        </div>
   @if ($errors->has('email'))
            <div id="email-error" class="error text-danger pl-3" for="email" style="display: block;">
              <strong>{{ $errors->first('email') }}</strong>
            </div>
          @endif
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" name="password" class="form-control" placeholder="{{ __('Password...') }}" value="{{ !$errors->has('password') ? "secret" : "" }}" required>
        </div>
  @if ($errors->has('password'))
            <div id="password-error" class="error text-danger pl-3" for="password" style="display: block;">
              <strong>{{ $errors->first('password') }}</strong>
            </div>
          @endif
        <div class="form-group form-check">
          <input type="checkbox" name="checkbox" class="form-check-input" {{ old('remember') ? 'checked' : '' }}>{{ __('Remember me') }}
        </div>
        <button class="btn btn-primary">Acceder</button>
      </form>
  <div class="row">
    <div class="col-6">
        @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-light">
                <small>{{ __('Forgot password?') }}</small>
            </a>
        @endif
    </div>
    <div class="col-6 text-right">
        <a href="{{ route('register') }}" class="text-light">
            <small>{{ __('Create new account') }}</small>
        </a>
    </div>
  </div>
    </div>
</div>
@endsection

