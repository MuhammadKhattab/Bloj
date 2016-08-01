<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;

use Auth;

class UsersController extends Controller
{
  public function show($id) {
    $user = User::findOrFail($id);

    $articles = $user->articles;

    return view('users.show', compact('articles', 'user'));

  }

  public function profile() {
    if(Auth::check()){
      return $this-> show(Auth::user()->id);
    }
  }

}
