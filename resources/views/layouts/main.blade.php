<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- css-->
    <link rel="stylesheet" href="http://localhost:8000/css/style.css">

</head>
<body>
    <header>
    <div>
        <a href="/" class="logo">Articles</a>
    </div>
    <div>
        <nav>
            <ul class="list-link">
                <li><a href="/">Artigos</a></li>
                <li><a href="/article/create">Criar artigo</a></li>
                @if(session()->get('data') != null)
                <li><a href="/user/article">Meus artigos</a></li>
                <li><a href="/logout">Sair</a></li>
                @else
                <li><a href="/login">Entrar</a></li>
                <li><a href="/user/register">Cadastrar</a></li>
                @endif
            </ul>
        </nav>
    </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>