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
                         <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <h1 class="tittle_login mb-5">
                                 Crear cuenta
                            </h1>

                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1">
                                 <i class="fa fa-font icon_login" aria-hidden="true"></i>
                              </span>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Nombre">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1">
                                  <i class="fa fa-envelope icon_login" aria-hidden="true"></i>
                              </span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1">
                                  <i class="fa fa-lock icon_login" aria-hidden="true"></i>
                              </span>
                                <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="Contraseña">
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="input-group mb-3">
                              <span class="input-group-text" id="basic-addon1">
                                 <i class="fa fa-lock icon_login" aria-hidden="true"></i>
                              </span>
                                <input id="password-confirm" type="password"
                                        class="form-control @error('password') is-invalid @enderror"
                                        name="password_confirmation" required autocomplete="new-password"  placeholder="********">
                            </div>

                            <div class="container-btn-save-2 text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-login-2">
                                     {{ __('Register') }}
                                </button>
                            </div>

                            <div class="text-center mt-3">
                                <a href="{{ route('login') }}" class="create_login">
                                   Iniciar sesion
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

