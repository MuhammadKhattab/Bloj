<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;

use Carbon\Carbon;

use App\Article;

use Auth;

class ArticlesController extends Controller
{

    public function __construct() {
      $this->middleware('auth',['only'=>'create']);
    }

    public function index() {
      $articles = Article::latest('published_at')->get();
      return view('articles.index', compact('articles'));
    }

    public function show($id) {
      $article = Article::findOrFail($id);
      return view('articles.show', compact('article'));
    }

    public function create() {
      return view('articles.create');
    }

    public function store(ArticleRequest $request) {
      $input = $request->all();
      $input['published_at'] = Carbon::now();

      $article = new Article($input);
      Auth::user()->articles()->save($article);

      flash()->success('Your Article has been created successfully! How kool!');

      return redirect('articles');
    }

    public function edit($id) {
      $article = Article::findOrFail($id);
      return view('articles.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request) {
      $article = Article::findOrFail($id);
      $article->update($request::all());
      return redirect('articles');
    }

}
