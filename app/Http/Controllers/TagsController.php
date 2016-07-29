<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tag;

class TagsController extends Controller
{
    public function index() {
      $tags = Tag::get();

      return view('pages.tags', compact('tags'));
    }

    public function show($id) {
      $tag = Tag::findOrFail($id);

      $articles = $tag -> articles;

      $query = $tag -> name;

      return view('articles.searchArticles', compact('articles', 'query'));
    }
}
