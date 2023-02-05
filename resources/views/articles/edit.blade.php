@extends('layouts.main')

@section('title', 'Editar artigo ')
@section('content')
    <main class="container">
        <div class="card">
            <div class="card-header">
                <h2>Editar artigo</h2>
            </div>
            <div class="card-body">
                <form action="/article/up/{{$article->id}}" method="post">
                @csrf
                @method('PUT')

                    <input type="text" name="title" id="" class="form-control" placeholder="Defina o título do artigo" required value="{{$article->title}}">
                    <br>
                    <textarea name="body" id="article" cols="30" rows="10" class="form-control" placeholder="Escreva o artigo aqui!" required>{{$article->body}}</textarea>
                    <select name="category" id="" class="form-control">
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="Javascript">Javascript</option>
                        <option value="PHP">PHP</option>
                        <option value="NodeJs">NodeJs</option>
                        <option value="Python">Python</option>
                    </select>
                    <input type="hidden" name="id" value="{{$article->id}}">
                    <button type="submit" class="button-orange">Cadastrar</button>
                </form>
            </div>
        </div>
    </main>
@endsection