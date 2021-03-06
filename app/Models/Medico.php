<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
  protected $fillable = [
      'rfc','correo','cedula','celular','direccion','especialidad',
  ];

  public function recetas()
  {
    return $this->hasMany(Receta::class,'medicos_id');
  }

  public function pacientes()
  {
    return $this->hasMany(Paciente::class,'medicos_id');
  }

  public function users()
  {
    return $this->belongsTo(User::class);
  }

  public function hospitales()
  {
    return $this->belongsTo(Hospital::class);
  }
}
