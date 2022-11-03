<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <form action="{{route('import')}}" enctype="multipart/form-data" method="POST">
        @csrf
        <input type="file" placeholder="Arquivo" name="alunos">
        <button>enviar</button>
    </form>
    
</body>
</html>