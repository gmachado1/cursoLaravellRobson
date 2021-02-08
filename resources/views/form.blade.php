<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('debug') }}" method="post">
        @csrf
        <label>Titulo</label>
        <input type="text" name="title">
        <br>
        <label>Sub-Titulo</label>
        <input type="text" name="subtitle">
        <input type="hidden" name="author" value="1">
        <br>
        <label>Conteúdo do Artigo</label>
        <textarea name="content" cols="30" rows="10"></textarea>

        <br>
        <input type="submit" value="Cadastrar Artigo">
    </form>
</body>
</html>