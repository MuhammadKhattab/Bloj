<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\UpdatePasswordRequest;

use Auth;

use Hash;

class SettingsController extends Controller
{

  public function __construct() {
    $this->middleware('auth');
  }

    public function index() {
      return view('settings.index');
    }

    public function updateName(Request $request) {
      $user = Auth::user();
      $user->update(['name'=>$request->name]);
      return app('App\Http\Controllers\UsersController')->show($user->id);
    }

    public function updatePassword(UpdatePasswordRequest $request) {
      $user =  Auth::user();
      if (Hash::check($request->oldPassword, $user->password)) {
        $user->update(['password' => bcrypt($request->newPassword)]);
        return app('App\Http\Controllers\UsersController')->show($user->id);
      }
      return $this->index();
    }
}
