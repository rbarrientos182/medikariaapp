<?php

namespace Medikaria\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function getRegister()
    {
        return view('admin/auth/register');
    }// fin de getRegister

    public function create(Request $request)
    {
        /*$this->validate($request,[
        //'name'     => 'required',
        'email'    => 'required|email|unique:users',
        'password' => 'required|min:6|confirmed',
        'accept' => 'accepted',]
      );*/

        $validator = Validator::make($request->all(),[
          //'name'     => 'required',
          'email'    => 'required|email|unique:users',
          'password' => 'required|min:6|confirmed',
          'accept' => 'accepted',
        ]);

        if ($validator->fails()) {
          return redirect()
          ->route('auth_show_register_path')
          ->withErrors($validator)
          ->withInput();
        }

        $user = new User;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->activo = 0;
        $user->remember_token = str_random(10);
        $user->save();

        return redirect()->route('auth_show_completed_path');
    }// fin de create

    public function getCompleted()
    {
        return 'Contacto guardado correctamente';
    }// fin de getCompleted

    public function getPasswordReset()
    {
        return view('admin/auth/password');
    }// fin de getPasswordRest


}
