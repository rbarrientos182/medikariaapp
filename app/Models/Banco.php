<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
  protected $fillable = [
      'nombrebanco',
  ];

  public function datos_bancarios()
  {
    return $this->hasMany(DatoBancario::class,'bancos_id');
  }
}
