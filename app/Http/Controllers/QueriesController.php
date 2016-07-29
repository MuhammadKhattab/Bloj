<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

use App\User;

use App\Tag;

class QueriesController extends Controller
{

  public function searchArticles(Request $request)
  {
      $query = $request->input('search');
      if($query != '') {
        $articles = Article::where('title', 'LIKE', '%' . $query . '%')
                             ->orWhere('excerpt', 'Like', '%' . $query . '%')
                             ->paginate(10);
        return view('articles.searchArticles', compact('articles', 'query'));
      }
      return app('App\Http\Controllers\ArticlesController')->index();
   }

}
