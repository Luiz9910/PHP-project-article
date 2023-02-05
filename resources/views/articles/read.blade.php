@extends('layouts.main')

@section('title', "artigo: $article->title")
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{$article->title}}</h2>
            </div>
            <div class="card-body">
                <p>{{$article->body}}</p>
            </div>
        </div>

@endsection