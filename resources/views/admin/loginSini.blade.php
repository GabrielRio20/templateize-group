


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Register</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Google Font: Source Sans Pro -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dosis&display=swap" rel="stylesheet">

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<!--===============================================================================================-->
</head>
<body style="background-color: #ffffff;">

    {{-- Admin authentication --}}
    <script>
        var auth = prompt("Enter admin authentication");
        if (auth == "TemplateizeAdmin$12345"){
            txt = "Welcome, Admin!"
        }
        else{
            history.back();
            txt = "You're not allowed to enter this page"
        }
        alert(txt);
    </script>

	@include('part.navbar_main')

	<div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="wrap-login100">
                    <form method="POST" action="{{ route('register') }}" class="login100-form validate-form">
                        @csrf
                        <span class="login100-form-title p-b-43">
                            Become an Admin
                        </span>

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

                        <div class="wrap-input100 validate-input mb-5">
                            <input class="input100" type="password" id="password-confirm" name="password_confirmation" required autocomplete="new-password">
                            <span class="focus-input100"></span>
                            <span class="label-input100">Confirm Password</span>
                        </div>

                        {{-- <div class="row mb-1">
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
                        </div> --}}

                        <div class="row mb-4">
                            <div class="container-login100-form-btn">
                                <button type="submit" class="login100-form-btn" name="level" id="admin" value="admin">
                                    {{ __('Register as Admin') }}
                                </button>
                            </div>
                        </div>

                        {{-- <div class="row mb-0">
                            <div class="container-login100-form-btn" name="level" id="contributor" 
                            value="contributor">
                                <button type="submit" class="login101-form-btn">
                                    {{ __('Register as Contributor') }}
                                </button>
                            </div>
                        </div> --}}
                    </form>

                    <div class="login100-more" style="background-image: url({{asset("/img/admin_register.jpg")}});">
                    </div>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

</body>
</html>
</div>

