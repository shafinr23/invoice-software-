<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V10</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset("login/images/icons/favicon.ico")}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/bootstrap/css/bootstrap.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/animate/animate.css")}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/css-hamburgers/hamburgers.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/animsition/css/animsition.min.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/select2/select2.min.css")}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset("login/vendor/daterangepicker/daterangepicker.css")}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset("login/css/util.css")}}">
	<link rel="stylesheet" type="text/css" href="{{asset("login/css/main.css")}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-50 p-b-90">
					<?php echo Form::open(array('url'=>'user/login','method'=>'POST')); ?>
					<span class="login100-form-title p-b-51">


						
						Login panel {{Session::get('invalide')}}
					</span>

					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
					</div>
					
					
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
					</div>
					
					<div class="flex-sb-m w-full p-t-3 p-b-24">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								Remember me
							</label>
						</div>

						<div>
							<a href="#" class="txt1">
								Forgot?
							</a>
						</div>
					</div>

					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<?php echo Form::close();?>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/jquery/jquery-3.2.1.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/animsition/js/animsition.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/bootstrap/js/popper.js")}}"></script>
	<script src="{{asset("login/vendor/bootstrap/js/bootstrap.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/select2/select2.min.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/daterangepicker/moment.min.js")}}"></script>
	<script src="{{asset("login/vendor/daterangepicker/daterangepicker.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/vendor/countdowntime/countdowntime.js")}}"></script>
<!--===============================================================================================-->
	<script src="{{asset("login/js/main.js")}}"></script>

</body>
</html>