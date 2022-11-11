


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
				<form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
					@csrf

					<span class="login100-form-title p-b-43">
						Welcome! Register Here
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="name" type="text" name="name" class="input100 @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
						<span class="focus-input100"></span>
						<span class="label-input100">{{ __('Name') }}</span>
						@error('name')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input id="email" type="text" name="email" class="input100 @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
						<span class="focus-input100"></span>
						<span class="label-input100">{{ __('Email Address') }}</span>
						@error('email')
							<span class="invalid-feedback" role="alert">
								<strong>{{ $message }}</strong>
							</span>
						@enderror
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input id="password" type="password" name="password" class="input100 @error('password') is-invalid @enderror" required autocomplete="new-password">
						<span class="focus-input100"></span>
						<span class="label-input100">{{ __('Password') }}</span>
					</div>

					<div class="row mb-3">
						<label for="password" class="col-md-1 col-form-label text-md-end">{{ __('Level') }}</label>
						<div class="col-md-6">
							<div class="form-check">
								<input class="form-check-input" type="radio" name="level" id="user" value="user" checked>
								<label class="form-check-label" for="flexRadioDefault1">
								  Customer
								</label>
							</div>

							<div class="form-check">
								<input class="form-check-input" type="radio" name="level" id="contributor" value="admin" checked>
								<label class="form-check-label" for="flexRadioDefault2">
								  Contributor
								</label>
							</div>
				
							<div class="form-check">
								<input class="form-check-input" type="radio" name="level" id="admin" value="admin" checked>
								<label class="form-check-label" for="flexRadioDefault2">
								  Admin
								</label>
							</div>
						</div>
					</div>

					{{-- <div class="flex-sb-m w-full p-t-3 p-b-32">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot Password?
							</a>
						</div>
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

				<div class="login100-more" style="background-image: url({{asset("/img/background_login.jpeg")}});">
				</div>
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

