<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
  protected $fillable = [
      'nombrehospital','direccionhospital',
  ];

  public function medicos()
  {
    return $this->hasMany(Medico::class);
  }
}
