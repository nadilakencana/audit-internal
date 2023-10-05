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
		.regist{
			background-color: blue;
		}
	</style>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="assets/property/images/jakarta barat/1.jpeg" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="tambahuser" method="post" enctype="multipart/form-data">
					@csrf
					<span class="login100-form-title">
						User Register
					</span>

					@if ($errors->has('email'))
						<div class="alert alert-danger">
							{{ $errors->first('email') }}
						</div>
					@endif
					@if ($errors->has('notel'))
						<div class="alert alert-danger">
							{{ $errors->first('notel') }}
						</div>
					@endif

					<div class="wrap-input100 validate-input" data-validate = "Valid name is required: ex@abc.xyz">
						<input class="input100" type="text" name="name" placeholder="Full Name" required>
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">

						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Valid number phone is required: ex@abc.xyz">
						<input class="input100" type="number" name="notel" placeholder="number" required>
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
							Register
						</button>
						<a class="txt2 mt-3" href="/log">
							<i class="fa-solid fa-arrow-left-long"></i>
							 Sig In
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

		$('.regist').click(function(){
			swal("Success", "Data anda berhasil disimpan", "success");
		});
	</script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</body>
</html>
