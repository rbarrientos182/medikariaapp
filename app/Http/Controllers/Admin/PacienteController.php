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
}
