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
                <th>#ID</th>
                <th>Nome:</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('user.show', ['user'=>$user->id])}}">Ver Usuários</a>
                    <a href="{{ route('user.edit', ['user'=>$user->id])}}">Editar Usuários</a>
                    <form action="{{ route('user.destroy', ['user'=>$user->id]) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" name="Remover">
                    </form>
                </td>
            </tr>
            @endForEach
            <tfoot>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><a href="{{ route('user.create')}}">Novo Usuário</a></td>
                </tr>
              </tfoot>
        </table>
    </body>
</html>