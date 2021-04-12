<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Linguagem</title>
</head>
<body>
    
<form action="{{ route('linguagem.store') }}" method="post">
@csrf
<label for="">Nome da Linguagem:</label>
<input type="text" name="nomeLinguagem">

<input type="submit" value="Cadastrar">
</form>

</body>
</html>