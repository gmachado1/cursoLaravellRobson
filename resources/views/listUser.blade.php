<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, inicial-scalable">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes de Usuários</title>
</head>
<body>
    <h1>{{ $user-> name }}</h1>
    <p>{{ $user-> email }}</p>
    <p>{{ date('d/m/Y H:i' , strtotime($user->created_at)) }}</p>
</body>
</html>