<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
  protected $fillable = [
      'nombremedicamento','laboratorio','presentacion','contenido','imagenmedicamento'
  ];

  public function recetas()
  {
    return $this->belongsToMany(Receta::class,'medicamentos_has_recetas','medicamentos_id','recetas_id')->withPivot('dosis','periodicidad','dias','cantidad');
  }

  public function ordenes()
  {
    return $this->belongsToMany(Orden::class,'ordenes_has_medicamentos','medicamentos_id','ordenes_id')->withPivot('subtotal_or','cantidad_or');
  }

  public function categorias()
  {
    return $this->belongsTo(Categoria::class);
  }
}
