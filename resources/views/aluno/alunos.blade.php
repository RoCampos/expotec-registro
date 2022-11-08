<!DOCTYPE html>
<html>
<head>
	<title> Registros </title>

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
<body style="background: #fffaf0;">

	<div class="container">

		<div class="row" >
			
			<div class="col-sm">
				
			</div>

			<div class="col-sm" style="margin-top: 25px">
				<div class="card text-center border-0" style="width: 45rem; ">
					<div>
						<span class="login100-form-title p-b-43" style="background: #fffaf0;">
							<img src="{{asset('app-assets/images/expotec-caico-2022.png')}}" style="height: 150px;width: 600px">
						</span>
						
					</div>
				</div>

				<div class="card" style="width: 45rem; margin-top: 15px;">	
					<div class="card-header" align="center" style="background: #E89D26">
                        <div class="d-flex align-items-center">
                            <h3 class="p-2">Alunos</h3>
                            <span class="ml-auto p-2">
                                <form class="form" action="{{route('alunos')}}">
                                    <input class="form-control" type="text" name="search" placeholder="Buscar">
                                </form>
                            </span>
                        </div>
					</div>
                    <div class="card-body">
                        <ul class="list-group list-group-flush">
							
							<li class="d-flex list-item">
								<span class="p-2">Aluno</span>
								<span class="ml-auto p-2">Turma</span>
							</li>
                            @foreach($alunos as $aluno) 
                            <li class="d-flex list-item">
                                <a class="p-2" href="{{route('aluno', ['aluno' => $aluno->id])}}">{{$aluno->nome}}</a>
								<span class="ml-auto p-2">
									<a href="{{route('turma', ['turma'=>$aluno->turma])}}">
										{{$aluno->turma}}
									</a>
								</span>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="card-bottom" style="margin-bottom: 10px">
                        <div class="d-flex justify-content-center">
                            {{$alunos->withQueryString()->links()}}
                        </div>
                    </div>
					
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