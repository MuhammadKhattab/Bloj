<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;

use Carbon\Carbon;

use App\Article;

use Auth;

class ArticlesController extends Controller
{

    public function __construct() {
      $this->middleware('auth',['only'=>['create', 'edit', 'destroy', 'store', 'update']]);
    }

    public function index() {
      $articles = Article::latest('published_at')->get();
      return view('article.index', compact('articles'));
    }

    public function show($id) {
      $article = Article::findOrFail($id);
      return view('article.show', compact('article'));
    }

    public function create() {
      return view('article.create');
    }

    public function store(ArticleRequest $request) {
      $input = $request->all();
      $input['published_at'] = Carbon::now();

      $article = new Article($input);
      Auth::user()->articles()->save($article);

      flash()->warning('Your Article has been created successfully! How kool!');

      return redirect('article');
    }

    public function edit($id) {
      $article = Article::findOrFail($id);
      return view('article.edit', compact('article'));
    }

    public function update($id, ArticleRequest $request) {
      $article = Article::findOrFail($id);
      $article->update($request->all());

      flash()->info('Your Article has been edited successfully!');

      return redirect('article');
    }

    public function destroy($id)
    {
        $article = Article::findOrFail($id);

        $article->delete();

        flash()->success('Your Article has been deleted successfully! Party Hard!');

        return redirect('article');
    }

}
