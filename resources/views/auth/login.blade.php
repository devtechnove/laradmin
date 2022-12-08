@extends('layouts.auth')

@section('content')
<div class="card">
    <div class="card-body">
      <!-- Logo -->
      <div class="app-brand justify-content-center mb-4 mt-2 ">
        <img src="{{ asset('assets/img/logo/logo_verde.png') }}" height="30" class="" alt="">
      </div>
      <!-- /Logo -->
      <h4 class="mb-1 pt-2">¡Bienvenidos a nuestra app! 👋</h4>
      <p class="mb-4">Ingresa tu correo y contraseña para ingresar.</p>

      <form id="formAuthentication" class="mb-3" action="{{ route('login') }}" method="POST">
         @csrf
        <div class="mb-3">
          <label for="email" class="form-label">Email or Username</label>
          <input id="email"
           type="email" 
           class="form-control @error('email') is-invalid @enderror" 
           name="email" 
           placeholder="Ingrese el usuario o correo electrónico"
           value="{{ old('email') }}"
           required 
           autocomplete="off" 
           autofocus>

          @error('email')
              <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
              </span>
          @enderror
        </div>
        <div class="mb-3 form-password-toggle">
          {{--  <div class="d-flex justify-content-between">
            <label class="form-label" for="password">Password</label>
            <a href="auth-forgot-password-basic.html">
              <small>Forgot Password?</small>
            </a>
          </div>  --}}
          <div class="input-group input-group-merge">
            <input id="password"
            type="password" 
            class="form-control @error('password') is-invalid @enderror" 
            name="password" 
            placeholder="***********"
            value="{{ old('password') }}"
            required 
            autocomplete="off" 
            >
 
             @error('password')
                 <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
               </span>
             @enderror
            <span class="input-group-text cursor-pointer"><i class="ti ti-eye-off"></i></span>
          </div>
        </div>
        <div class="mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="remember-me" />
            <label class="form-check-label" for="remember-me"> Remember Me </label>
          </div>
        </div>
        <div class="mb-3">
          <button class="btn btn-primary d-grid w-100" type="submit">Sign in</button>
        </div>
      </form>

      {{--  <p class="text-center">
        <span>New on our platform?</span>
        <a href="auth-register-basic.html">
          <span>Create an account</span>
        </a>
      </p> 

      <div class="divider my-4">
        <div class="divider-text">or</div>
      </div>

      <div class="d-flex justify-content-center">
        <a href="javascript:;" class="btn btn-icon btn-label-facebook me-3">
          <i class="tf-icons fa-brands fa-facebook-f fs-5"></i>
        </a>

        <a href="javascript:;" class="btn btn-icon btn-label-google-plus me-3">
          <i class="tf-icons fa-brands fa-google fs-5"></i>
        </a>

        <a href="javascript:;" class="btn btn-icon btn-label-twitter">
          <i class="tf-icons fa-brands fa-twitter fs-5"></i>
        </a> --}}
      </div>
    </div>
  </div>
@endsection
