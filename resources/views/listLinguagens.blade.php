<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes da Linguagem</title>
</head>
<body>
  <h1>{{ $linguagem->nomeLinguagem }}</h1> 
  <p>{{ date('d/m/Y H:i', strtotime($linguagem->created_at))}}</p>  

</body>
</html>