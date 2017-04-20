<?php

namespace Medikaria;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
  protected $fillable = [
      'categoria',
  ];

  public function datos_bancarios()
  {
    return $this->hasMany(Medicamento::class);
  }
}
