<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/index-all.css') }}">
    @stack('styles')

    <title>Login - Task Management System</title>
</head>

<body>
    <nav>
        <div>
            <a title="Anything in Time" href="{{ route('users.home') }}">
                Home
            </a>
        </div>

        <div>

            <a href="{{ route('auth.logout') }}">logout</a>
        </div>
    </nav>

    <main>
        @yield('conteudo')
    </main>

    <footer>
        <p>Task management systems <small>©</small> -
            {{ now()->year }}</p>
    </footer>
</body>

</html>
