 <!DOCTYPE html>
<html lang="en">
<head>
	<title>Property</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{ asset("login/images/icons/favicon.ico") }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("login/vendor/bootstrap/css/bootstrap.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("login/fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("login/vendor/animate/animate.css") }}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{ asset("login/vendor/css-hamburgers/hamburgers.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("login/vendor/select2/select2.min.css") }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset("login/css/util.css") }}">
	<link rel="stylesheet" type="text/css" href="{{ asset("login/css/main.css") }}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
<!--===============================================================================================-->
</head>
<body>

	<style>
		.login{
			background-color: blue;
		}
	</style>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/property/images/jakarta barat/1.jpeg" alt="IMG">
					<div class="text-center">
						<a class="txt2" href="/">
							<i class="fa-solid fa-arrow-left-long"></i>
							Back to home
						</a>
					</div>
				</div>


				<form class="login100-form validate-form" action="loginproses" method="post" enctype="multipart/form-data">
					@csrf
					<span class="login100-form-title">
						User Login
					</span>

					@if(Session::has('success'))
						<div class="alert alert-success">
							{{ Session::get('success') }}
						</div>
					@endif

					@if(Session::has('error'))
						<div class="alert alert-danger">
							{{ Session::get('error') }}
						</div>
					@endif
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Login
						</button>
					</div>
					
					<div class="text-center p-t-136">
						<a class="txt2" href="/regist">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
						
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="{{ asset("login/vendor/jquery/jquery-3.2.1.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("login/vendor/bootstrap/js/popper.js") }}"></script>
	<script src="{{ asset("login/vendor/bootstrap/js/bootstrap.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("login/vendor/select2/select2.min.js") }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset("login/vendor/tilt/tilt.jquery.min.js") }}"></script>
	{{-- <script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script> --}}
<!--===============================================================================================-->
	<script src="{{ asset("login/js/main.js") }}"></script>
	<script>

		$('.login').click(function(){
			swal("Success", "Anda berhasil login", "success");
		});
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>
</html>