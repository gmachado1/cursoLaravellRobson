<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" 
            content="width=device-width, user-scalable=no, inicial-scalable">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Detalhe do Usuário</title>
    </head>
    <body>
        <h1>{{$user->name}}</h1>
        <p>{{$user -> email}}</p>
        <p>{{ date('d/m/y H:i', strtotime($user->crated_at)) }}</p>

    </body>
</html>