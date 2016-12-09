<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Medicamento extends Model
{
  protected $fillable = [
      'nombremedicamento','laboratorio','presentacion','contenido',
  ];

  public function recetas()
  {
    return $this->belongsToMany(Receta::class);
  }
}
