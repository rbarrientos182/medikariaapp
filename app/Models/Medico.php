<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
  protected $fillable = [
      'nombre','rfc','correo','cedula','celular','direccion','foto',
  ];

  public function recetas()
  {
    return $this->hasMany(Receta::class,'medicos_id');
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
