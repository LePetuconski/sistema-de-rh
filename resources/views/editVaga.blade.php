<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Vaga</title>
</head>
<body>
    
<form action="{{ route('vaga.update', ['vaga' => $vaga->id]) }}" method="post">
@csrf
@method('PUT')
<label for="">Nome da vaga:</label>
<input type="text" name="nomeVaga" value="{{ $vaga->nomeVaga}}">

<label for="">Descrição:</label>
<input type="text" name="descricao" value="{{ $vaga->descricao}}">





<input type="submit" value="Editar">
</form>

</body>
</html>