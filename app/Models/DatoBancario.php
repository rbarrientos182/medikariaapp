<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class DatoBancario extends Model
{
  /**
   * The table associated with the model.
   *
   * @var string
   */

   protected $table = 'datos_bancarios';

   protected $fillable = [
       'notarjeta', 'fechavencimiento',
   ];

   public function users()
   {
     return $this->belongsTo(User::class);
   }

   public function bancos()
   {
      return $this->belongsTo(Banco::class);
   }


}
