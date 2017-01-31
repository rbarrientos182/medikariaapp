<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
  protected $fillable = [
      'descripcionDosis','fechaExpedicion',
  ];

  public function historial_clinicos()
  {
    return $this->hasOne(HistorialClinico::class,'recetas_id');
  }

  public function pacientes()
  {
    return $this->belongsTo(Paciente::class);
  }

  public function medicamentos()
  {
    return $this->belongsToMany(Medicamento::class);
  }

}
