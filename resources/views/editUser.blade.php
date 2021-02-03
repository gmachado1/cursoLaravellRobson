<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, inicial-scalable">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar de Usuários</title>
</head>
<body>
    <form action="{{ route('user.edit',['user'=> $user->id]) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">Nome do usuário</label>
        <input type="text" name="name" value="{{$user->name}}">

        <label for="">E-mail do usuário:</label>
        <input type="text" name="email"value="{{$user->email}}">

        <label for="">Senha do usuário:</label>
        <input type="password" name="password" value="{{$user->password}}">

        <input type="submit" value="Editar usuário">
    </form>
</body>
</html>