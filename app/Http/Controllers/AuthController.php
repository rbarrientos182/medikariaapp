<?php

namespace Medikaria\Http\Controllers;

//use Medikaria\Models\User;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Auth;
use Medikaria\Http\Requests;


class AuthController extends Controller
{
    public function index()
    {
      return view('admin/auth/auth');
    }// fin de index

    public function store(Request $request)
    {
      $this->validate($request,[
        'email'    => 'required|email',
        'password' => 'required']
      );
      // si el usuario no existe redireccionamos a la vista login
      if(!Auth::attempt($request->only(['email','password'])) ) {
          return redirect()->route('auth_show_path')->withErrors('No encontramos al usuario');
      }
      
      // en caso contrario significa que el usuario existe y mandamos a home
      return redirect()->route('home_show_path');

    }// fin de store

    public function destroy()
    {
       //auth()->logout();
       Auth::logout();
       return redirect()->route('auth_show_path');
    }// fin de destroy
}
