<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Tag;

use App\Http\Requests\UpdateTagRequest;

use Auth;

class TagsController extends Controller
{

    public function __construct() {
      $this->middleware('auth',['except'=>['show', 'index']]);
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



    public function store(UpdateTagRequest $request) {
      Tag::create($request->all());

      flash()->success('Tag has been created successfully!');

      return redirect('admin');
    }


    public function update($id, UpdateTagRequest $request) {
      if(strcmp(Auth::user()->role,'Admin')===0) {
        $tag = Tag::findOrFail($id);

        $tag->update(['name' => $request->name]);

        flash()->success('Tag name has been updated successfully!');
      }
      return redirect('admin');
    }

    public function destroy($id) {
      if(strcmp(Auth::user()->role,'Admin')===0) {
        Tag::findOrFail($id)->delete();

        flash()->success('Tag has been deleted successfully!');
      }
      return redirect('admin');
    }

}
