@extends('layouts.main')

@section('title', 'Cadastro')
@section('content')
    <div class="card container">
            <div class="card-header">
                <h2>Cadastro</h2>
            </div>
            <div class="card-body">
                <form action="/save/register" method="post">
                    @csrf
                    <label for="Email">Email</label>
                    <input type="email" name="email" id="Email" class="form-control" placeholder="Digite seu email" required>
                    <label for="Password">Senha</label>
                    <input type="password" name="password" id="Password" class="form-control" placeholder="Digite sua senha" required minlength="">
                    <button type="submit" class="button-orange">
                        Cadastrar
                    </button>
                </form>
            </div>
        </div>
@endsection