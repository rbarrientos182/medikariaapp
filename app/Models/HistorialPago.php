<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialPago extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */

   protected $table = 'historial_pagos';

   protected $fillable = [
       'total',
   ];

   public function users()
   {
     return $this->belongsTo(User::class);
   }

   public function recetas()
   {
     return $this->belongsTo(Receta::class);
   }

   public function farmacias()
   {
     return $this->belongsTo(Farmacia::class);
   }

}
