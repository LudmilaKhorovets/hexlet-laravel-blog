<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index() {
        $articles = Article::paginate();
        return view('articles.index', compact('articles'));
    }

    public function show($id) {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }

    public function create() {
        $article = new Article();
        return view('articles.create', compact('article'));
    }

    public function store(Request $request) {

        $data = $request->validate([
            'name' => 'required|unique:articles',
            'body' => 'required|min:1000',
        ]);

        $article = new Article();

        $article->fill($data);

        $article->save();

        return redirect()
            ->route('articles.index')
            ->with('status', 'Статья успешно создана!');
    }
}
