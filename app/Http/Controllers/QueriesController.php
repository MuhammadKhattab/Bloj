<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

use App\User;

use App\Tag;

class QueriesController extends Controller
{

  public function search(Request $request)
  {
      $query = $request->input('search');
      if($query != '') {
        $articles = Article::where('title', 'LIKE', '%' . $query . '%')
                             ->orWhere('excerpt', 'Like', '%' . $query . '%')
                             ->paginate(10);

        $users = User::where('name', 'LIKE', '%' . $query . '%')->get();

        $tags = Tag::where('name', 'LIKE', '%' . $query . '%')->get();

        return view('pages.search', compact('articles', 'query', 'users', 'tags'));
      }
      return app('App\Http\Controllers\ArticlesController')->index();
   }

}
