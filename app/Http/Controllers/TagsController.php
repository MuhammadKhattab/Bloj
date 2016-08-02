<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tag;

class TagsController extends Controller
{

    public function __construct() {
        $this->middleware('auth',['only', 'destroy']);
    }



    public function index() {
      $tags = Tag::all();

      return view('tags.index', compact('tags'));
    }



    public function show($id) {
      $tag = Tag::findOrFail($id);

      $articles = $tag -> articles;

      return view('tags.show', compact('articles', 'tag'));
    }



    public function update($id, Request $request) {
      $tag = Tag::findOrFail($id);
      $tag->update(['name' => $request->name]);

      return redirect('admin');
    }

    public function destroy($id) {
      Tag::findOrFail($id)->delete();

      return redirect('admin');
    }

}
