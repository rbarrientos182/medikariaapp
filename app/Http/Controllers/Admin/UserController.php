<?php

namespace Medikaria\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Medikaria\Http\Requests;

use Medikaria\Http\Controllers\Controller;
use Medikaria\Models\User;
use Medikaria\Models\Medico;
use Medikaria\Models\Hospital;

class UserController extends Controller
{
    public function index($id)
    {
      $user = User::findOrFail($id);
      $medico = $user->medicos;
      $hospital = $medico->hospitales;
      $hospitales = Hospital::all();

      return view('admin.user.profile', compact('user','medico','hospital','hospitales'));
    }

    public function getEdit($id)
    {
      $user = User::findOrFail($id);
      return view('admin.user.edit',['user' => $user]);
      //<input type="hidden" value="_method" value="patch">
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->password = $request->get('password');
        $user->name = $request->get('name');
        //$post->users_id = Auth::id(); ejemplo para foreign key
        $user->save();
        return redirect()->route('user_show_profile_path', $user->id);
    }
}
