<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Linguagens</title>
</head>
<body>
        <table>
    <tr>
            <td>ID</td>
            <td>Nome da Linguagem</td>
            <td>Ações</td>
            
    </tr>
    @foreach($linguagens as $linguagem)
    <tr>
    <td>{{ $linguagem->id}}</td>
    <td>{{ $linguagem->nomeLinguagem}}</td>
    

    <td>
            <a href="{{ route('linguagem.show', ['linguagem' => $linguagem]) }}">Ver Linguagem</a>
            <form action="" method="post">
           @csrf
          @method('delete')
            <input type="hidden" name="linguagens" value="">
            <input type="submit" value="Remover">
            </form>
    
    </td>
    </tr>
    @endforeach
        </table>
</body>
</html>