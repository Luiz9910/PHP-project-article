@extends('layouts.main')

@section('title', 'HDC ')
<link rel="stylesheet" href="http://localhost:8000/css/article-create.css">
@section('content')
    <main class="container">
        <div class="card">
            <div class="card-header">
                <h2>Cadastro de Artigo</h2>
            </div>
            <div class="card-body">
                <form action="/article/save" method="post" enctype="multipart/form-data">
                @csrf
                    <input type="text" name="title" id="" class="form-control" placeholder="Defina o título do artigo" required>
                    <br>
                    <textarea name="body" id="article" cols="30" rows="10" class="form-control" placeholder="Escreva o artigo aqui!" required></textarea>
                    <select name="category" id="" class="form-control">
                        <option value="HTML">HTML</option>
                        <option value="CSS">CSS</option>
                        <option value="Javascript">Javascript</option>
                        <option value="PHP">PHP</option>
                        <option value="NodeJs">NodeJs</option>
                        <option value="Python">Python</option>
                    </select>
                    <input type="hidden" name="id" value="1">
                    <button type="submit" class="button-laranja">Cadastrar</button>
                </form>
            </div>
        </div>
    </main>
@endsection