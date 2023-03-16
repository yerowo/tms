<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="{{ asset('css/root.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">

    <title>Login - Task Management System Enter</title>
</head>

<body>
    <main>
        <div class="card">
            <h2>login </h2>

            <form action="{{ route('auth.login') }}" method="POST">
                @csrf
                <fieldset>
                    <div class="in-group email">
                        <label>Email</label>
                        <input type="email" name="email" class="in">
                    </div>

                    <div class="in-group senha">
                        <label>Password</label>
                        <input type="password" name="password" class="in">
                    </div>

                    <div class="in-group entrar">
                        <input type="submit" value="login" class="btn">
                    </div>
                </fieldset>
            </form>

            <blockquote>
                <p><a href="">Forget password</a></p>
            </blockquote>
        </div>

        <blockquote>
            <p>Don't have an account <a href="{{ route('users.create') }}">Sign up</a></p>
        </blockquote>
    </main>
</body>

</html>
