<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Orden extends Model
{

  protected $table = 'ordenes';

  protected $fillable = [
      'recetas_id','subtotal','comision',
  ];

  public function recetas()
  {
    return $this->belongsTo(Receta::class);
  }

  public function medicamentos()
  {
    return $this->belongsToMany(Medicamento::class,'ordenes_has_medicamentos','ordenes_id','medicamentos_id')->withPivot('subtotal_or','cantidad_or');
  }


}
