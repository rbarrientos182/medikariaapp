<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Farmacia extends Model
{
  protected $fillable = [
      'nombrefarmacia', 'direccionfarmacia','latitud','longitud','telefono',
  ];

  public function historial_pagos()
  {
    return $this->hasMany(HistorialPago::class);
  }
}
