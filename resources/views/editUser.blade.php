<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
</head>
<body>
    
<form action="{{ route('user.update', ['user' => $user->id]) }}" method="post">
@csrf
@method('PUT')
<label for="">Nome do usuário:</label>
<input type="text" name="name" value="{{ $user->name}}">

<label for="">Email do usuário:</label>
<input type="text" name="email" value="{{ $user->email}}">

<label for="">Senha do usuário:</label>
<input type="text" name="password">



<input type="submit" value="Editar">
</form>

</body>
</html>