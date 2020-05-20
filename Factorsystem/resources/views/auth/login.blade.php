@extends('layouts.app')

@section('content')
<div class="container">
  <div class="mt-4 mb-4 py-4">
    <div class="row justify-content-center">
      <div class="col-md-7">
        <div class="mt-5 mb-5 py-5">
          <img src="../public/img/undraw_authentication_fsn5.png" class="img-fluid" alt="login">
        </div>
      </div>
      <div class="col-md-5">
        <div class="card shadow mt-5">
          <div class="card-body">
            <h1>Ingresar</h1>
            <br>
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <div class="form-group">
                <input id="User" type="text" placeholder="Usuario" class="form-control @error('user') is-invalid @enderror"
                name="user" value="{{ old('user') }}"
                required autocomplete="user"
                autofocus
                >
                @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                name="password"
                placeholder="Contraseña"
                required autocomplete="current-password"
                >
                @error('password')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
                @enderror
              </div>
              <div class="form-group">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                  </label>
                </div>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">
                  {{ __('ingresar') }}
                </button>

                @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                  {{ __('Recuperar contraseña') }}
                </a>
                @endif
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
