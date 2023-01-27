@extends('layouts.main')

@section('title', 'Meus artigos ')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header sub-title-and-link">
                <h2>Meus Artigos</h2>
                <a href="/article/create" class="btn btn-warning">Criar novo Artigo</a>
            </div>
        </div>
        <br>
        <div>
            <table  class="table table-bordered">
                <thead>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Categoria</th>
                    <th>Ações</th>
                </thead>
                <tbody>
                    @foreach($articles as $article)
                        @if ($user_id == $article->user_id) 
                            <tr>
                                <td>{{$article->id}}</td>
                                <td>{{$article->title}}</td>
                                <td>{{$article->category}}</td>
                                <td>
                                    <div class="edit-delete">
                                        <a href="/article/edit/{{$article->id}}" class="btn btn-warning">Editar</a>
                                        <form action="/article/delete" method="post" onsubmit="confirmDelete(event, this)">
                                            <input type="hidden" name="id" value="<%= article.id %>">
                                            <button class="btn btn-danger">Deletar</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection