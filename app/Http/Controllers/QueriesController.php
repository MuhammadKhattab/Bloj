<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

use DB;

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
        return view('pages.search', compact('articles', 'query'));
      }
      return app('App\Http\Controllers\ArticlesController')->index();
   }

   public function searchByUser(Request $request) {

   }

   public function searchByTag($query) {
     if($query != '') {
       $tag = Tag::where('name', $query)->first();
       if($tag != null) {
         $articles = $tag->articles;
         return view('pages.searchArticles', compact('articles', 'query'));
       }
     }
     return app('App\Http\Controllers\ArticlesController')->index();
   }

}
