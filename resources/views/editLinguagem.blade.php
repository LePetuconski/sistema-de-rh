<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Linguagem</title>
</head>
<body>
    
<form action="{{ route('linguagem.update', ['linguagem' => $linguagem->id]) }}" method="post">
@csrf
@method('PUT')
<label for="">Nome da Linguagem:</label>
<input type="text" name="nomeLinguagem" value="{{ $linguagem->nomeLinguagem}}">







<input type="submit" value="Editar">
</form>

</body>
</html>