


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V18</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="img/png" href="img/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #ffffff;">
	@extends('layouts.app')
	
	@section('content')

	<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                {{-- <div class="card text-bg-light"> --}}
                    {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                    <div class="wrap-login100">
                        <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                            @csrf
							<span class="login100-form-title p-b-43">
								Welcome! Register Here
							</span>

                            {{-- <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

							<div class="wrap-input100 validate-input" >
								<input class="input100 @error('email') is-invalid @enderror" type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
								<span class="focus-input100"></span>
								<span class="label-input100">Name</span>
								@error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
								@enderror
							</div>

                            {{-- <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

							<div class="wrap-input100 validate-input" >
								<input class="input100 @error('email') is-invalid @enderror" type="email" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
								<span class="focus-input100"></span>
								<span class="label-input100">Email</span>
								@error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
								@enderror
							</div>

                            {{-- <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div> --}}

							<div class="wrap-input100 validate-input">
								<input class="input100 @error('password') is-invalid @enderror" type="password" id="password" name="password" value="{{ old('password') }}" required autocomplete="new-password">
								<span class="focus-input100"></span>
								<span class="label-input100">Password</span>
								@error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
								@enderror
							</div>

                            {{-- <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div> --}}

							<div class="wrap-input100 validate-input">
								<input class="input100" type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
								<span class="focus-input100"></span>
								<span class="label-input100">Confirm Password</span>
							</div>

                            <div class="row mb-1">
                                <label for="password" class="col-md-4 col-form-label">{{ __('Level') }}</label>
                            </div>
                            
                            <div class="col mb-5">

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level" id="customer" value="customer">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                      Customer
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level" id="contributor" value="contributor">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                      Contributor
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="level" id="admin" value="admin">
                                    <label class="form-check-label" for="flexRadioDefault3">
                                      Admin
                                    </label>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="container-login100-form-btn">
                                    <button type="submit" class="login100-form-btn">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>

						<div class="login100-more" style="background-image: url({{asset("/img/background_login.jpeg")}});">
						</div>

                    </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>
	
	

	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/login.js"></script>

@endsection

</body>
</html>
</div>

