<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Usuário</title>
</head>
<body>
    
<form action="{{ route('user.store') }}" method="post">
@csrf
<label for="">Nome do usuário:</label>
<input type="text" name="name">

<label for="">Email do usuário:</label>
<input type="text" name="email">

<label for="">Senha do usuário:</label>
<input type="text" name="password">



<input type="submit" value="Cadastrar">
</form>

</body>
</html>