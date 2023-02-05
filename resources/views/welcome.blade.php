@extends('layouts.main')

@section('title', 'Feed')

@section('content')
    <div class="title-search">
        <h1>Busque um artigo</h1>
        <form action="/" method="get">
            <input type="search" name="search" class="search" placeholder="Procurar...">
        </form>
    </div>
    @if($search)
    <h2 class="search-sub-title">Buscando por: {{$search}}</h2>
    @else
    <h2  class="search-sub-title">Próximos artigos</h2>
    @endif
    @foreach($articles as $article)
    <div class="contents" style="margin-bottom: 40px;">
        <div class="article">
            <div>
                <p class="nome">{{$article->title}}</p>
            </div>
            <div>
                <button class="button-orange"><a href="/read/article/{{$article->id}}">Ler artigo</a></button>
            </div>
        </div>
    </div>
    @endforeach

    @if(count($articles) == 0 && $search)
    <p class="search-sub-title">Não há artigos disponiveís <a href="/">Ver todos artigos</a></p>
    @elseif(count($articles) == 0)
    <p class="search-sub-title">Não há artigos disponiveís</p>
    @endif
@endsection