<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Vagas</title>
</head>
<body>
        <table>
    <tr>
            <td>ID</td>
            <td>Nome da Vaga</td>
            <td>Descrição</td>
            <td>Ações</td>
            
    </tr>
    @foreach($vagas as $vaga)
    <tr>
    <td>{{ $vaga->id }}</td>
    <td>{{ $vaga->nomeVaga}}</td>
    <td>{{ $vaga->descricao}}</td>

    <td>
            <a href="{{ route('vaga.show', ['vaga' => $vaga]) }}">Ver Vaga</a>
            <form action="" method="post">
           @csrf
         @method('delete')
            <input type="hidden" name="vagas" value="">
            <input type="submit" value="Remover">
            </form>
    
    </td>
    </tr>
   @endforeach
        </table>
</body>
</html>