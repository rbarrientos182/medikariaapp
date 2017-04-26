<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $fillable = [
      'categoria',
  ];

  public function medicamentos()
  {
    return $this->hasMany(Medicamento::class,'categorias_id');
  }
}
