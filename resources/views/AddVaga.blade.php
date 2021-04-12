<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Vagas</title>
</head>
<body>
    
<form action="{{ route('vaga.store') }}" method="post">
@csrf
<label for="">Nome da Vaga:</label>
<input type="text" name="nomeVaga">

<label for="">Descrição da Vaga:</label>
<textarea  name="descricao"
          rows="5" cols="33"> </textarea>

<input type="submit" value="Cadastrar">
</form>

</body>
</html>