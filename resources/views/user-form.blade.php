@extends('templates.index-template')

@section('conteudo')
    <div class="card">
        <h2>Sign up </h2>

        <form action="{{ route('users.store') }}" method="POST">
            @csrf
            <fieldset>
                <div class="in-group nome">
                    <label>Full name</label>
                    <input type="text" name="name" class="in">
                </div>

                <div class="in-group celular">
                    <label>phone</label>
                    <input type="text" name="phone" class="in">
                </div>

                <div class="in-group email">
                    <label>Email</label>
                    <input type="email" name="email" class="in">
                </div>

                <div class="in-group password">
                    <label>Password</label>
                    <input type="password" name="password" class="in">
                </div>

                <div class="in-group enter">
                    <input type="submit" value="Cadastrar" class="btn blue">
                </div>
            </fieldset>
        </form>

        <blockquote>
            <p><a href="">Forget password</a></p>
        </blockquote>
    </div>

    <blockquote>
        <p>Already have an account <a href="{{ route('login') }}">login</a></p>
    </blockquote>
@stop
