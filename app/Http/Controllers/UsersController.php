<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use App\Tag;

use Auth;

class UsersController extends Controller
{

  public function __construct() {
    $this->middleware('auth', ['except', 'show']);
  }



  public function show($id) {
    $user = User::findOrFail($id);

    $articles = $user->articles;

    $authors[$user->id] = $user;

    return view('users.show', compact('articles', 'user', 'authors'));
  }



  public function profile() {
    return $this -> show(Auth::user()->id);
  }



  public function admin() {
    if(strcmp(Auth::user()->role, 'Admin') === 0) {

      $users = User::all();

      $tags = Tag::all();

      return view('users.admin', compact('users', 'tags'));
    }
    return redirect('/');
  }



  public function destroy($id) {
    $user = User::findOrFail($id);

    if(strcmp(Auth::user()->role, 'Admin') === 0 || Auth::user()->id === $user->id) {
        $user->delete();
    }
    return redirect('admin');
  }

}
