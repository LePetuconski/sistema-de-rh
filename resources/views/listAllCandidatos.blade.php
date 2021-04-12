<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Candidatos</title>
</head>
<body>
        <table>
    <tr>
            <td>ID</td>
            <td>Ações</td>
            
    </tr>
    @foreach($candidatos as $candidato)
    <tr>
    <td>{{ $candidato->id}}</td>
    

    <td>
            <a href="{{ route('candidato.show', ['candidato' => $candidato]) }}">Ver Candidato</a>
            <form action="" method="post">
           @csrf
          @method('delete')
            <input type="hidden" name="candidatos" value="">
            <input type="submit" value="Remover">
            </form>
    
    </td>
    </tr>
    @endforeach
        </table>
</body>
</html>