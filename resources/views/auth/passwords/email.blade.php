@extends('layouts.app')

@section('css')
<link href="{{ asset('css/login.css') }}" rel="stylesheet">
@endsection


@section('content')

    {{-- ------------------ --}}

			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf

					<span class="login100-form-title">
                        {{ __('Reset Password') }}
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                         <input id="email" type="email" class="input100 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Correo@gmail.com">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
		    		</div>


					<div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Send Password Reset Link') }}
                        </button>
					</div>

				</form>
			</div>

@endsection

@section('js')
<script src="{{ asset('js/login.js') }}" defer></script>
<script src="{{ asset('js/tilt.jquery.min.js') }}" defer></script>
@endsection
