@extends('layouts.main')

@section('title', 'HDC ')

@section('content')
    <main>
        <div class="pesquisa">
            <h1>Busque um artigo</h1>
            <form action="">
                <input type="search" name="" id="search" placeholder="Procurar...">
            </form>
        </div>
        @foreach($events as $dado)
        <div class="conteudo">
            <div class="artigo">
                <div>
                    <p class="nome">{{$dado->title}}</p>
                </div>
                <div>
                    <button class="button-laranja"><a href="#">Ler artigo</a></button>
                </div>
            </div>
        </div>
        @endforeach
    </main>
@endsection