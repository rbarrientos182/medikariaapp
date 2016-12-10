<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
  protected $table = 'hospitales';

  protected $fillable = [
      'nombrehospital','direccionhospital',
  ];

  public function medicos()
  {
    return $this->hasMany(Medico::class,'hospitales_id');
  }
}
