@extends('layouts.main')

@section('title', 'Login')
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
                    <label for="Password">Senha</label>
                    <input type="password" name="password" id="Password" class="form-control" placeholder="Digite sua senha"  minlength="">
                    <button type="submit" class="button-orange">Login</button>
                </form>
            </div>
        </div>
@endsection