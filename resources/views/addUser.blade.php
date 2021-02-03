<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, inicial-scalable">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de Usuários</title>
</head>
<body>
    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <label for="">Nome do usuário</label>
        <input type="text" name="name">

        <label for="">E-mail do usuário:</label>
        <input type="text" name="email">

        <label for="">Senha do usuário:</label>
        <input type="password" name="password">

        <input type="submit" value="Cadastrar usuário">
    </form>
</body>
</html>