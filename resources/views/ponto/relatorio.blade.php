<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        .container {
            display: block;
            width: 80%
        }

        .card {
            display: block;
            width: 630px;
        }

        .card-header {
            width: inherit;
            border: black;
            border: 1px;
            border-style: solid;
            background-color: #E89D26;
        }


        .card-body {
            display: block;
            width: inherit;
            border-top: 0px;
            border-bottom: 1px;
            border-left: 1px;
            border-right: 1px;
            border-style: solid;
            overflow: auto;
        }

        .header {
            width: auto;
            position: relative;
        }

        button {
            background-color: green;
            color: white;
            border-radius: 5px;
            border: 0;
            padding: 10px;
            margin: 10px;
            position: relative;
            width: 100px;
        }

        h1 {
            position: relative;
            padding: 10px;
            margin: 10px;
        }

        .li {
            position: relative;
            width: inherit; 
            margin-left: 5px;
            padding-top: 5px;
            padding-botom: 5px;
        }

    </style>

</head>


<body>

    <div class="container" style="clear: left">
        <div class="card">
            <div class="card-header">
                <div class="header" >
                    <h1>Relatório: {{$turma}}</h1>
                </div>
            </div>
            <div class="card-body">
                <div class="li">
                    <div style="float: left; width:60%; margin-top:5px; padding-bottom: 10px">
                        Aluno
                    </div>
                    <div style="float: left; margin-top:5px; padding-bottom: 10px">
                        Presença
                    </div>
                </div>
                <br>
                @foreach ($alunos as $aluno)
                <br>
                <div class="li">
                    <div style="float: left; width:60%">
                        {{ $aluno->nome }}
                    </div>
                    <div style="float: left">
                        @foreach(array_values($aluno->participacao()) as $dia)
                        <span style="margin-right: 2px;">
                            {{$dia}}
                        </span>
                        @endforeach
                    </div>
                </div>  
                @endforeach
            </div>
        </div>    
    </div>
    
</body>
</html>