<?php

namespace Medikaria\Http\Controllers;

//use Medikaria\Models\User;
use Illuminate\Http\Request;
use Validator;
use Illuminate\support\Facades\Auth;

//use Medikaria\Http\Requests;


class AuthController extends Controller
{
    public function index()
    {
      return view('admin/auth/auth');
    }

    public function store(Request $request)
    {
      $this->validate($request,[
        'email'    => 'required|email',
        'password' => 'required']
      );
      
      if(!Auth::attempt($request->only(['email','password'])) ) {
          return redirect()->route('auth_show_path')->withErrors('No encontramos al usuario');
      }

        return 'Listo';

    }
}
