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
}
