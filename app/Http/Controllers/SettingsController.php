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

      flash()->success('Your name has been updated successfully!');

      return redirect('profile');
    }

    public function updatePassword(UpdatePasswordRequest $request) {
      $user =  Auth::user();
      if (Hash::check($request->oldPassword, $user->password)) {
        $user->update(['password' => bcrypt($request->newPassword)]);

        flash()->success('Your password has been updated successfully!');

        return redirect('profile');
      }
      return $this->index();
    }
}
