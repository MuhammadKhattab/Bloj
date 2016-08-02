<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;

use Carbon\Carbon;

use App\Article;

use App\Tag;

use App\User;

use Auth;

class ArticlesController extends Controller
{

    public function __construct() {
      $this->middleware('auth',['except'=>['show', 'index']]);
    }



    public function index() {
      $articles = Article::latest('created_at')->get();

      $authors;
      foreach($articles as $article) {
          $authors[$article->user_id] = User::find($article->user_id);
      }

      return view('articles.index', compact('articles', 'authors'));
    }



    public function show($id) {
      $article = Article::findOrFail($id);

      $user = User::findOrFail($article->user_id);

      return view('articles.show', compact('article', 'user'));
    }



    public function create() {
      $tags = Tag::lists('name', 'id');

      return view('articles.create', compact('tags'));
    }



    public function store(ArticleRequest $request) {
      $article = Auth::user()->articles()->create($request->all());

      // IDK why create() doesn't include this and update() is not working
      $article->excerpt = $request['excerpt'];
      $article->save();

      $article->tags()->attach($request->input('tag_list'));

      flash()->warning('Your Article has been created successfully! How kool!');

      return redirect('articles');
    }



    public function edit($id) {
      $article = Article::findOrFail($id);
      if($article->user_id === Auth::user()->id) {
        $tags = Tag::lists('name', 'id');

        return view('articles.edit', compact('article', 'tags'));
      }
      return view('errors.404');
    }



    public function update($id, ArticleRequest $request) {
      $article = Article::findOrFail($id);
      if($article->user_id === Auth::user()->id) {
        $article->update($request->all());

        // IDK why update() doesn't include this
        $article->excerpt = $request['excerpt'];
        $article->save();

        if($request->input('tag_list') != null) {
          $article->tags()->sync($request->input('tag_list'));
        }
        else {
          $article->tags()->sync([]);
        }

        flash()->info('Your Article has been edited successfully!');
      }
        return redirect('articles');
    }



    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        if($article->user_id === Auth::user()->id) {
          $article->delete();

          flash()->success('Your Article has been deleted successfully! Party Hard!');

          return redirect('articles');
        }
      return view('errors.404');
    }

}
