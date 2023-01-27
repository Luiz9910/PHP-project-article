<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\User;

class ArticleController extends Controller
{
    public function index() {
        $search = request('search');

        if ($search) {
            $articles = Article::where([
                ['title', 'like', '%'.$search.'%']
            ])->get();
        } else {
            $articles = Article::all();
        }

        return view('welcome', ['articles' => $articles, 'search' => $search]);
    }

    public function create() {
        return view('articles.create');
    }

    public function store(Request $request) {
        $article = new Article();

        $article->title = $request->title;
        $article->body = $request->body;
        $article->category = $request->category;

        $data = session()->get('data');
        $user_id = User::where(['email' => $data['email']])->get();
        $article->user_id = $user_id['0']['id'];

        $article->save();

        return redirect('/');
    }

    public function myArticle() {
        $data = session()->get('data');
        $user_id = User::where(['email' => $data['email']])->get();
        
        $id = $user_id['0']['id'];

        $articles = Article::all();

        return view('articles.index', ['articles' => $articles, 'user_id' => $id]);
    }

    public function edit($id) {
        $article = Article::find($id);



        return view('articles.edit', ['article' => $article]);
    }
}
