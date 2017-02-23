<?php

namespace Medikaria\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use Medikaria\Http\Requests;

use Medikaria\Http\Controllers\Controller;
use Medikaria\Models\User;
use Medikaria\Models\Medico;
use Medikaria\Models\Paciente;

class PacienteController extends Controller
{
    public function index($id)
    {
        $user = User::findOrFail($id);
        if($user->medicos){
          $medico = $user->medicos;
          if($medico->pacientes)
          {
            $paciente = $medico->pacientes;
          }
        }
        else {
          $paciente = "";
        }

        return view('admin.paciente.show', compact('paciente'));
    }

    public function getCreate($id)
    {
        $user = User::findOrFail($id);

        if($user->medicos){
          $medico = $user->medicos;
        }
        else {
          $medico = "";
        }

        return view('admin.paciente.create', compact('user','medico'));
    }

    public function create(Request $request, $id)
    {
        $validator = Validator::make($request->all(),[
          'nombre'     => 'required',
          'direccion'  => 'required',
          'estatura'   => 'required|numeric',
          'peso'       => 'required|numeric',
          'nacimiento' => 'required|date',
          'celular'    => 'required|string',
          'sexo'       => 'required',
          'email'      => 'email'
        ]);

        if($validator->fails()){
          return redirect()
          ->route('paciente_show_create_path',$id)
          ->withErrors($validator)
          ->withInput();
        }

        $paciente = new Paciente;
        $paciente->nombrepaciente = $request->nombre;
        $paciente->direccionpaciente = $request->direccion;
        $paciente->estatura = $request->estatura;
        $paciente->peso = $request->peso;
        $paciente->nacimiento = $request->nacimiento;
        $paciente->celular = $request->celular;
        $paciente->sexo = $request->sexo;
        $paciente->padecimientos = $request->padecimientos;
        $paciente->alergias = $request->alergias;
        $paciente->cirugias = $request->cirugias;
        $paciente->medicos_id = $request->idmedico;
        $paciente->save();

        return redirect()
        ->route('paciente_show_create_path',$id)
        ->with('status','Paciente registrado exitosamente.');

    }

    public function getUpdate($value='')
    {
      # code...
    }
}
