<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Auth;

class PagesController extends Controller
{
    public function welcome() {
      if(Auth::check()) {
        return app('App\Http\Controllers\ArticlesController')->index();
      }
      return view('pages.welcome');
    }

    public function contact() {
      return view('pages.contact');
    }

    public function about() {
      return view('pages.about');
    }

    public function magic() {
      return view('pages.magic');
    }

}
