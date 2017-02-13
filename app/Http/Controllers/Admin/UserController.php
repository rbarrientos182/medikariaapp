<?php

namespace Medikaria\Http\Controllers\Admin;

use Validator;
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

    public function getEditPhoto($id)
    {
      $user = User::findOrFail($id);
      $medico = $user->medicos;
      $hospital = $medico->hospitales;
      $hospitales = Hospital::all();
      return view('admin.user.photoprofile',compact('user','medico','hospital','hospitales'));
      //<input type="hidden" value="_method" value="patch">
    }

    public function update(Request $request, $id)
    {
      $validator = Validator::make($request->all(),[
        'name'      => 'required',
        'password'  => 'required|min:6|confirmed',
        'celular'   => 'required|integer',
        'direccion' => 'required',
        'RFC'       => array('required','regex:/^([A-Z,Ñ,&]{3,4}([0-9]{2})(0[1-9]|1[0-2])(0[1-9]|1[0-9]|2[0-9]|3[0-1])[A-Z|\d]{3})$/'),
        //'accept'    => 'accepted',
      ]);

      if ($validator->fails()) {
        return redirect()
        ->route('user_show_profile_path',$id)
        ->withErrors($validator)
        ->withInput();
      }
        $user = User::findOrFail($id);
        if($user->password != $request->password){
          $user->password = bcrypt($request->password);
        }
        $user->nombre = $request->name;
        $user->save();

        $medico = Medico::findOrFail($request->idmedico);
        $medico->rfc = $request->RFC;
        $medico->cedula = $request->cedula;
        $medico->celular = $request->celular;
        $medico->hospitales_id = $request->idhospital;
        $medico->direccion = $request->direccion;
        $medico->save();
        return redirect()->route('user_show_profile_path', $user->id);
    }
}
