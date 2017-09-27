<?php

namespace Medikaria\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Medikaria\Http\Requests;

use Medikaria\Http\Controllers\Controller;
use Medikaria\Models\Receta;
use Medikaria\Models\Orden;
use Medikaria\Models\User;

class OrdenController extends Controller
{
  public function makeOrden($id,$idreceta)
  {
        //creamos la orden con relación a la receta
        $receta = Receta::findOrFail($idreceta);
        $paciente = $receta->pacientes;
        $user = User::findOrFail($id);
        $medico = $user->medicos;

        $subtotal = 0;
        $precioProducto = 0;
        //dd($receta->medicamentos);
        foreach ($receta->medicamentos as $recetas) {
          $precioProducto = $recetas->pivot->cantidad * $recetas->precio;
          $subtotal = $subtotal + $precioProducto;
        }

        $orden = Orden::create(['recetas_id' => $idreceta,
                                  'subtotal' => $subtotal,
                                  'comision' => '0']);

        foreach ($receta->medicamentos as $recetas) {
          $precioProducto = $recetas->pivot->cantidad * $recetas->precio;
          $orden->medicamentos()->attach($recetas->id,['subtotal_or' => $precioProducto,
          'cantidad_or' => $recetas->pivot->cantidad]);
        }

        return view('admin.orden.order', compact('receta','medico','paciente','orden'));
  }
}
