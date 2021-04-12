<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuários</title>
</head>
<body>
        <table>
    <tr>
            <td>ID</td>
            <td>Nome</td>
            <td>Email</td>
            <td>Ações</td>
    </tr>
   @foreach($users as $user)
    <tr>
    <td>{{ $user->id}}</td>
    <td>{{ $user->name}}</td>
    <td>{{ $user->email}}</td>

    <td>
            <a href="{{ route('user.show', ['user' => $user->id]) }}">Ver Usuário</a>
            <form action="{{ route('user.destroy',['user' => $user->id] )}}" method="post">
           @csrf
          @method('delete')
            <input type="hidden" name="user" value="">
            <input type="submit" value="Remover">
            </form>
    
    </td>
    </tr>
    @endforeach
        </table>
</body>
</html>