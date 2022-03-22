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
                         <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <h1 class="tittle_login mb-5">
                                 {{ __('Reset Password') }}
                            </h1>

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

                            <div class="container-btn-save-2 text-center mt-4">
                                <button type="submit" class="btn btn-primary btn-login-2">
                                    Reestablecer contraseña
                                </button>
                            </div>

                            <div class="text-center mt-3">
                                <a href="{{ route('login') }}" class="create_login">
                                   Volver
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
