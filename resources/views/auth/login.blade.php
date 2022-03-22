@extends('layouts.app')

@section('css')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection

@section('bg', 'bg_login')


@section('content')

<div class="content_dis m-0 vh-100 row justify-content-center align-items-center ">
    <div class="col-auto">

        <div class="content_login">
                <div class="row">

                    <div class="col-xs-12 col-sm-12 col-lg-6 col-xl-6  text-center">
                        <img class="img_logo " src="{{asset('image/logo_neon.png')}}" alt="IMG">
                    </div>

                    <div class="col-xs-12 col-sm-12 col-lg-6 col-xl-6  text-left">
                        <form class="form_login" method="POST" action="{{ route('login') }}">
                            @csrf

                            <h1 class="tittle_login mb-5">
                                 Iniciar  Sesion
                            </h1>

                            <label class="sr-only" for="inlineFormInputGroup">email</label>

                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1">
                                  <i class="fa fa-envelope icon_login" aria-hidden="true"></i>
                              </span>
                              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo@gmail.com">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <label class="sr-only" for="inlineFormInputGroup">Password</label>

                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1">
                                  <i class="fa fa-lock icon_login" aria-hidden="true"></i>
                              </span>
                              <input id="password" type="password"  class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="form-check">
                                   <input class="form-check-input_login" type="checkbox" name="remember" id="remember"
                                       {{ old('remember') ? 'checked' : '' }}>
                                   <label class="form-check-label_login" for="remember">
                                       {{ __('Remember Me') }}
                                   </label>
                            </div>

                            <div class="container-btn-save text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-login">
                                    {{ __('Login') }}
                                </button>
                            </div>

                            @if (Route::has('password.request'))
                                <div class="text-center mt-3">
                                    <a class="forgot_login" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
                            @endif

                            <div class="text-center p-t-136">
                                <a href="{{ route('register') }}" class="create_login">
                                    Crear una cuenta
                                    <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                                </a>
                            </div>

				        </form>
                    </div>

                </div>
            </div>
    </div>
</div>


@endsection

@section('js')
<script src="{{ asset('js/login.js') }}" defer></script>
<script src="{{ asset('js/tilt.jquery.min.js') }}" defer></script>
@endsection
