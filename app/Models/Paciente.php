<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
  protected $fillable = [
      'nombrepaciente','direccionpaciente','estatura','nacimiento','celular','foto',
  ];

  public function usuarios()
  {
    return $this->belongsTo(Usuario::class);
  }
  
}
