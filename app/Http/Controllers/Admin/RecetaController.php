<?php

namespace Medikaria\Http\Controllers\Admin;

use Validator;
use Illuminate\Http\Request;
use Medikaria\Http\Requests;
use PDF;

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
            'paciente' => 'required',
            'diagnostico'     => 'required',
            'medicamento'     => 'required',
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
          $tipo = $medicamento->tipo;
          //evaluacion para saber de que tipo es el medicamento
          if ($tipo == 1) {
             $dosisLabel = $dosis.' ml';
          }
          elseif ($tipo == 2) {
              if($dosis == 0.25){
                 $dosisLabel = '1/4';
              }
              elseif ($dosis == 0.5) {
                 $dosisLabel = '1/2';
              }
              elseif ($dosis == 1.25) {
                 $dosisLabel = '1 1/4';
              }
              elseif ($dosis == 1.5) {
                 $dosisLabel = '1 1/2';
              }
              else {
                 $dosisLabel = $dosis;
              }
          }
          else {
             $dosisLabel = $dosis;
          }

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
                                   'dosis' => $dosisLabel,
                                   'dosisValor' => $dosis,
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

    public function guardarReceta(Request $request)
    {
      if($request->ajax()){
        //primero guardamos la receta
        $paciente = Paciente::findOrFail($request->paciente);
        $medico = $paciente->medicos;
        $usuario = $medico->users;
        $receta = Receta::create(['pacientes_id' => $request->paciente,
                                  'diagnostico' => $request->diagnostico,
                                  'fechaExpedicion' => date('Y-m-d')]);
        //obtenemos la cadena de la tabla receta y eliminamos el ultimo ;
        $cadena = substr($request->cadena,0, -1);
        // convierto la cadena de la tabla tarima a un array.
        $cadena = explode(';',$cadena);

        //recorremos las tuplas y las convertimos en array
        for ($i=0; $i < count($cadena); $i++) {
          $datos = explode(',',$cadena[$i]);
          //$datos = explode(',',$cadena[0]);
          if($datos[2] == '1/4'){
             $datos[2] = 0.25;
          }
          elseif ($datos[2]== '1/2') {
             $datos[2] = 0.5;
          }
          elseif ($datos[2] == '1 1/4') {
             $datos[2] = 1.25;
          }
          elseif ($datos[2] == '1 1/2') {
             $datos[2] = 1.5;
          }
          $receta->medicamentos()->attach($datos[0],['dosis' => $datos[2],
          'periodicidad' => $datos[3], 'dias' => $datos[4], 'cantidad' => $datos[5]]); //A la relación, le agregamos el id del alumno, que es el 3.
        }

        return response()->json(['mensaje' => 'Datos guardados correctamente',
                                 'idreceta' => $receta->id,
                                 'usuario' => $usuario->id]);
      }
    }

    public function showReceta($id,$idreceta)
    {
          $receta = Receta::findOrFail($idreceta);
          $paciente = $receta->pacientes;
          $user = User::findOrFail($id);
          $medico = $user->medicos;
          return view('admin.receta.receta', compact('receta','medico','paciente'));
    }

    public function printReceta($id,$idreceta)
    {
          $receta = Receta::findOrFail($idreceta);
          $paciente = $receta->pacientes;
          $user = User::findOrFail($id);
          $medico = $user->medicos;
          return view('admin.receta.print', compact('receta','medico','paciente'));
    }

    public function pdfReceta($id,$idreceta)
    {
          $receta = Receta::findOrFail($idreceta);
          $paciente = $receta->pacientes;
          $user = User::findOrFail($id);
          $medico = $user->medicos;

          $pdf = PDF::loadView('admin.receta.print',compact('receta','medico','paciente'));
          return $pdf->download('archivo.pdf');
    }
}
