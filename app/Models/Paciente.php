<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
  protected $fillable = [
      'nombrepaciente','direccionpaciente','estatura','nacimiento','celular','foto',
  ];

  public function recetas()
  {
    return $this->hasMany(Receta::class);
  }

  public function users()
  {
    return $this->belongsTo(User::class);
  }

}
