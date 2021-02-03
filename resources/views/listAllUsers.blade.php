<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" 
            content="width=device-width, user-scalable=no, inicial-scalable">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Listage de Usuários</title>
    </head>
    <body>
        <table>
            <tr>
                <td>#ID</td>
                <td>Nome:</td>
                <td>E-mail</td>
                <td>Ações</td>
            </tr>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <a href="">Ver Usuários</a>
                        <form action="{{ route('user.destroy', ['user'=>$user->id]) }}" method="post">
                            @csrf
                            <!-- form spofin-->
                            @method('DELETE')
                            <input type="hidden" name="user" value="{{$user->id}}">
                            <input type="submit" value="Remover">
                        </form>
                    </td>
                </tr>
            @endforeach    
        </table>
    </body>
</html>