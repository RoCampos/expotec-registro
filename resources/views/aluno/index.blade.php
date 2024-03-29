<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V20</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="{{asset('app-assets/images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('app-assets/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{('app-assets/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendor/animate/animate.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('app-assets/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/util.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('app-assets/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-b-160 p-t-50">
				<form class="login100-form validate-form" method="post" action="{{route('login')}}">
					@csrf

					<span class="login100-form-title p-b-43">
						<img src="{{asset('app-assets/images/expotec5.png')}}" style="height: 220px;width: 420px">
					</span>
					
					{{-- <div class="wrap-input100 rs1 rs2 validate-input" data-validate = "Use sua matrícula"> --}}
					<div class="wrap-input100 rs1 rs2 @error('matricula') alert-validate @enderror"  @error('matricula') data-validate={{$message}} @enderror >
						<input class="input100" type="text" name="matricula">
						<span class="label-input100">Matrícula Suap</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Enviar
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
	
<!--===============================================================================================-->
	<script src="{{asset('app-assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('app-assets/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('app-assets/vendor/bootstrap/js/popper.js')}}"></script>
	<script src="{{asset('app-assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('app-assets/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('app-assets/vendor/daterangepicker/moment.min.js')}}"></script>
	<script src="{{asset('app-assets/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('app-assets/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
	<script src="{{asset('app-assets/js/main.js')}}"></script>

	@if(Session::has('massage'))
	<script type="text/javascript">	
		$(document).ready(function(){
    		alert('{{Session::get('message')}}');
  		});
	</script>
	@endif

</body>
</html>