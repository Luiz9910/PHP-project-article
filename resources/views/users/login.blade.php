@extends('layouts.main')

@section('title', 'HDC ')
<link rel="stylesheet" href="http://localhost:8000/css/user.css">
@section('content')
    <div class="card container">
            <div class="card-header">
                <h2>Login</h2>
            </div>
            <div class="card-body">
                <form action="/auth" method="post">
                    @csrf
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="Email" class="form-control" placeholder="Digite seu email" >
                    <label for="Password" class="listaDeInput">Senha</label>
                    <input type="password" name="password" id="Password" class="form-control" placeholder="Digite sua senha"  minlength="">
                    <button type="submit" class="button-submit btn-block button-laranja">
                        Login
                    </button>
                </form>
            </div>
        </div>
@endsection