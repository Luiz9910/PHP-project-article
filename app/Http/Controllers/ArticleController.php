<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    public function index() {
        $dados = Article::all();
        return view('welcome', ['events' => $dados]);
    }

    public function create() {
        return view('articles.create');
    }

    public function store(Request $request) {
        $article = new Article();

        $article->title = $request->title;
        $article->body = $request->body;
        $article->category = $request->category;

        $article->save();

        return redirect('/');
    }

    public function myArticle() {
        $articles = Article::all();

        return view('articles.index', ['articles' => $articles]);
    }

    public function edit($id) {
        $article = Article::find($id);

        return view('articles.edit', ['article' => $article]);
    }
}
