<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Article;

class PagesController extends Controller
{
    public function welcome() {
      return view('pages.welcome');
    }

    public function contact() {
      return view('pages.contact');
    }

    public function about() {
      return view('pages.about');
    }

    public function search(Request $request)
    {
        $query = $request->input('search');
        if($query != '') {
          // Returns an array of articles that have the query string located somewhere within
          // our articles titles. Paginates them so we can break up lots of search results.
          $articles = Article::where('title', 'LIKE', '%' . $query . '%')
                               ->orWhere('excerpt', 'Like', '%' . $query . '%')
                               ->paginate(10);
          return view('pages.search', compact('articles', 'query'));
        }
        return app('App\Http\Controllers\ArticlesController')->index();
     }

}
