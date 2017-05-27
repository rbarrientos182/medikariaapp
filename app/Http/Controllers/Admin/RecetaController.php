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
use Medikaria\Models\Categoria;

class RecetaController extends Controller
{
    public function index($id)
    {
      $user = User::findOrFail($id);
      $categoria = Categoria::all();

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

      if(!$categoria){
          $categoria="";
      }

      return view('admin.receta.show', compact('user','medico','paciente','categoria'));
    }

    public function makeReceta(Request $request, $id)
    {
        if($request->ajax()){

          $validator = Validator::make($request->all(),[
            'idpaciente'     => 'required',
            'diagnostico'     => 'required',
            'dias'     => 'required|numeric'
          ]);

          if($validator->fails()){
            return response()->json(['errors' => $validator->errors()->all()]);
          }
          $pacientes_id = $request->idpaciente;
          $diagnostico = $request->diagnostico;
          $medicamentos_id = $request->medicamento;



          //evaluación para saber la cantidad de medicamento a obtener

          $bandera=0;
          //obtenemos el medicamento para sacar el valor de contenido
          $medicamento = Medicamento::findOrFail($medicamentos_id);
          $id = $medicamento->id;
          $contenido = $medicamento->contenidomedida;
          $nombre = $medicamento->nombremedicamento.' '.$medicamento->contenidomedida.' '.$medicamento->contenidodescripcion;
          $dosis = $request->dosis;
          $dias = $request->dias;
          $periodicidad = $request->perio;
          define("DIA",24);// definimos una constante para las horas totales de un dia
          $horasTotales = DIA * $dias; // sacamos las horas totales de acuerdo a cuantos dias
          $cantidad = 0;
          $totalContenido = 1;
          for($i=1; $i<=$horasTotales; $i=$i+$periodicidad) {
            if ($bandera==0) {
              $cantidad = $dosis;
              $bandera = 1;
            }// fin de if
            else {
              $cantidad = $cantidad + $dosis;
              if ($cantidad>$contenido) {
                 $totalContenido++;
                 $contenido = $contenido + $contenido;
              }// fin de if
            }// fin de else
          }// fin de for

          $totalContenido;


          //$paciente = Medico::findOrFail($id);
          return response()->json(['id' => $id,
                                   'nombre' => $nombre,
                                   'dosis' => $dosis,
                                   'periodicidad' => $periodicidad,
                                   'dias' => $dias,
                                   'total' => $totalContenido,]);
        }
    }

    public function findMedicamento(Request $request,$id)
    {
      if($request->ajax()){
        $medicamento = Medicamento::findOrFail($id);
        return response()->json($medicamento);
      }
    }
}
