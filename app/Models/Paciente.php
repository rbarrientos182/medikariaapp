<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
  protected $fillable = [
      'nombrepaciente','direccionpaciente','estatura','nacimiento','celular',
      'imagenpaciente','sexo','emailpaciente','padecimientos','alergias','cirugias',
  ];

  public function recetas()
  {
    return $this->hasMany(Receta::class,'pacientes_id');
  }

  public function medicos()
  {
    return $this->belongsTo(Medico::class);
  }
}
