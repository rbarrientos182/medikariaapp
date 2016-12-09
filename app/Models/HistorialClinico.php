<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class HistorialClinico extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */

   protected $table = 'historial_clinicos';

   protected $fillable = [
       'diagnostico',
   ];

   public function recetas()
   {
      return $this->belongsTo(Receta::class);
   }
}
