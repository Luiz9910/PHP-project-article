@extends('layouts.main')

@section('title', 'Feed')

@section('content')
    <div class="title-search">
        <h1>Busque um artigo</h1>
        <form action="">
            <input type="search" name="" class="search" placeholder="Procurar...">
        </form>
    </div>
    @foreach($events as $dado)
    <div class="contents">
        <div class="article">
            <div>
                <p class="nome">{{$dado->title}}</p>
            </div>
            <div>
                <button class="button-orange"><a href="#">Ler artigo</a></button>
            </div>
        </div>
    </div>
    @endforeach
@endsection