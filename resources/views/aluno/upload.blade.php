<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload - Alunos</title>

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
</head>
<body>

    <div class="container">

        <div class="row">

            <div class="col-sm">

            </div>

            <div class="col-sm" style="margin-top: 25px">
                <div class="card text-center border-0" style="width: 45rem">
					<div>
						<span class="login100-form-title p-b-43">
							<img src="{{asset('app-assets/images/expotec-caico-2022.png')}}" style="height: 150px;width: 600px">
						</span>
					</div>
				</div>

                <div class="card" style="width: 45rem; margin-top: 15px;">

                    <div class="card-header" style="background: #E89D26">
                        <div class="row text-center">
                            <div class="col">
                                <h1>Upload - Lista de Participantes</h1>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <form action="{{route('import')}}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="form-groupmb-2 py-2">
                                        <input type="file" placeholder="Arquivo" name="alunos" class="form-control">
                                    </div>
                                    <button class="btn btn-success">enviar</button>
                                </form>
                            </div>
                        </div>
                        
                    </div>

                </div>
            </div>

            <div class="col-sm">
                
            </div>

        </div>

    </div>


    
    
</body>
</html>