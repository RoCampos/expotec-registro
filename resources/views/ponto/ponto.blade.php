<!DOCTYPE html>
<html>
<head>
	<title> Registro Individual </title>

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

	<div class="container">

		<div class="row">
			
			<div class="col-sm">
				
			</div>

			<div class="col-sm" style="margin-top: 25px">
				<div class="card text-center border-0" style="width: 60rem">
					<div>
						<div class="align-middle">
							<h1 class="h1">Relatório Invidiual</h1>
						</div>
						
					</div>
				</div>

				<div class="card" style="width: 60rem; margin-top: 15px">
					
					<div class="card-header" align="center">
						<h2 class="h2">{{$aluno->nome}} - {{$aluno->matricula}}</h2>
						<h3 class="h3">Curso: {{$aluno->curso}}</h2>
						<h3 class="h3">Turma: {{$aluno->turma}}</h2>
					</div>
					<ul class="list-group list-group-flush">
						
						@for ($i = 0; $i < count($pontos); $i++) 

							@if ($i % 2 == 0)

								<li class="list-group-item">
									<b>Entrada:</b> {{ 
										\Carbon\Carbon::parse(
											$pontos[$i]->ponto
										)->toTimeString()}}
								</li>
							@else 

								<li class="list-group-item">
									<b>Saída:</b>: {{
										\Carbon\Carbon::parse(
											$pontos[$i]->ponto
										)->toTimeString()}}
								</li>

							@endif
						@endfor

					</ul>
				</div>
			</div>

			<div class="col-sm">
				
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
</body>
</html>