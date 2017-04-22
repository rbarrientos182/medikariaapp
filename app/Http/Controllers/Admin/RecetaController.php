<?php

namespace Medikaria\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use Medikaria\Http\Requests;

use Medikaria\Http\Controllers\Controller;
use Medikaria\Models\User;
use Medikaria\Models\Medico;
use Medikaria\Models\Paciente;
use Medikaria\Models\Receta;
use Medikaria\Models\Medicamento;

class RecetaController extends Controller
{
    public function index($id)
    {
      $user = User::findOrFail($id);
      $medicamento = Medicamento::all();

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

      if(!$medicamento){
          $medicamento="";
      }

      return view('admin.receta.show', compact('user','medico','paciente','medicamento'));
    }

    public function makeReceta(Request $request, $id)
    {
        if($request->ajax()){
          $pacientes_id = $request->idpaciente;
          $diagnostico = $request->diagnostico;
          $medicamentos_id = $request->medicamento;
          $dosis = $request->dosis;
          $periodicidad = $request->perio;
          $dias = $request->dias;
          //$paciente = Medico::findOrFail($id);
          return response()->json(['pacientes_id' => $pacientes_id]);
        }
    }
}
