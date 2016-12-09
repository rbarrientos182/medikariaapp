<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Medico extends Model
{
  protected $fillable = [
      'nombre','rfc','correo','cedula','celular','direccion','foto',
  ];

  public function usuarios()
  {
    return $this->belongsTo(Usuario::class);
  }

  public function hospitales()
  {
    return $this->belongsTo(Hospital::class);
  }
}
