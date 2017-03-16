<?php

namespace Medikaria\Http\Controllers\Admin;

use Validator;
use Image;
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

        $paciente = User::findOrFail($id);
        $paciente->nombrepaciente = $request->nombre;
        $paciente->direccionpaciente = $request->direccion;
        $paciente->estatura = $request->estatura;
        $paciente->peso = $request->peso;
        $paciente->nacimiento = $request->nacimiento;
        $paciente->celular = $request->celular;
        $paciente->imagenpaciente = 'paciente.png';
        $paciente->sexo = $request->sexo;
        $paciente->emailpaciente = $request->email;
        $paciente->padecimientos = $request->padecimientos;
        $paciente->alergias = $request->alergias;
        $paciente->cirugias = $request->cirugias;
        $paciente->medicos_id = $request->idmedico;
        $paciente->save();

        return redirect()
        ->route('paciente_show_create_path',$id)
        ->with('status','Paciente registrado exitosamente.');

    }

    public function getUpdate($idpaciente,$editar)
    {
        $paciente = Paciente::findOrFail($idpaciente);
        if(!$paciente){
          $paciente = "";
        }

        return view('admin.paciente.edit', compact('paciente','editar'));
    }

    public function update(Request $request, $idpaciente)
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

        $editar = 1;

        if($validator->fails()){
          return redirect()
          ->route('paciente_show_update_path',[$idpaciente,$editar])
          ->withErrors($validator)
          ->withInput();
        }

        $paciente = Paciente::findOrFail($idpaciente);
        $paciente->nombrepaciente = $request->nombre;
        $paciente->direccionpaciente = $request->direccion;
        $paciente->estatura = $request->estatura;
        $paciente->peso = $request->peso;
        $paciente->nacimiento = $request->nacimiento;
        $paciente->celular = $request->celular;
        $paciente->sexo = $request->sexo;
        $paciente->emailpaciente = $request->email;
        $paciente->padecimientos = $request->padecimientos;
        $paciente->alergias = $request->alergias;
        $paciente->cirugias = $request->cirugias;
        $paciente->save();



        return redirect()
        ->route('paciente_show_update_path',[$idpaciente,$editar])
        ->with('status','El paciente se editó con éxito.');

    }

    public function updateFoto(Request $request, $idpaciente)
    {
        $validator = Validator::make($request->all(),[
          'imagen'     => 'required|image',
        ]);

        $editar = 0;

        if($validator->fails()){
          return redirect()
          ->route('paciente_show_update_path', [$idpaciente, $editar])
          ->withErrors($validator)
          ->withInput();
        }

        $paciente = Paciente::findOrFail($idpaciente);
        $extension = $request->file('imagen')->getClientOriginalExtension(); //capturamos la extension de la imagen
        $file_name = $paciente->id.'.'.$extension;

        // ajustamos tamaño de imagen y lo subimos
        Image::make($request->file('imagen'))
        ->resize(240,240)
        ->save('img/pacientes/'.$file_name);

        $paciente->imagenpaciente = $file_name;
        $paciente->save();

        return redirect()
        ->route('paciente_show_update_path', [$idpaciente, $editar])
        ->with('status','La imagen se cambio con éxito.');
    }
}
