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

}
