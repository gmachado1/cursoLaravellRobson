<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <!-- https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css -->
    <style>
        html,
        body{
            height:100%;
        }

        body{
            display: -ms-flexbox;
            display:flex;
            -ms-flex-align:center;
            align-items: center;
            padding-top:40px;
            padding-bottom: 40px;
            background-color:#f5f5f5;
        }
        .form-signin{
            width:100%;
            max-width:330px;
            padding:15px;
            margin: auto;
        }
        .form-signin .checkbox{
            font-weight:400;
        }
        .form-signin .form-control:focus{
            z-index:2;
        }
        .form-signin input[type="email"]{
            margin-bottom:-1px;
            border-bottom-right-radius:0;
            border-bottom-left-radius:0;
        }
        .form-signin input[type="password"]{
            margin-bottom:10px;
            border-bottom-right-radius:0;
            border-bottom-left-radius:0;
        }
        img{
            max-width:100%;
            margin-bottom:30px
        }
    </style>
</head>
<body>
   <form class="form-signin" method="post" action="{{ route('admin.login.do') }}">
    @csrf
    {{-- <img src="https://www.upinside.com.br/themes/upinside_new/_img/logo.png" alt=""> --}}
    @if($errors->all())
        @foreach($errors->all() as $error)
                <div class="alert alert-danger" role="alert">{{$error}} </div>
        @endforeach
    @endif
       <label for="email" class="sr-only">Endereço de email</label>
       <input type="text" name="email" id="email" class="form-control" value="gustavo@teste.com" placeholder="Seu e-mail" require>
       <label for="password" class="sr-only">Senha</label>
       <input type="password" name="password" id="password" class="form-control" placeholder="Senha" require>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    </form>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"  ></script>
</body>
</html>