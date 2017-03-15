<?php

namespace Medikaria\Http\Controllers;

use Validator;
use Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Medikaria\Models\User;
use Medikaria\Models\Medico;
use Medikaria\Models\Hospital;
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
        $validator = Validator::make($request->all(),[
          'name'     => 'required',
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
        $user->nombre = $request->name;
        $user->password = bcrypt($request->password);
        $user->activo = 0;
        $user->remember_token = str_random(10);
        $user->foto = 'profile.png';
        $user->save();

        $medico = new Medico;
        $medico->users_id = $user->id;
        $medico->hospitales_id = 1;
        $medico->save();

        Mail::send('admin.auth.emails.bienvenido',$request->all(),function($msj) use ($user)
        {
          $msj->from('barrientos.isc@gmail.com', '¡Bienvenido!');
          $msj->to($user->email,$user->nombre)->subject('¡Hola '.$user->nombre.'!');

        });
        return redirect()->route('auth_show_completed_path',$request->name);
    }// fin de create

    public function getCompleted($nombre)
    {
        return('bienvenido: '.$nombre);
    }// fin de getCompleted
}
