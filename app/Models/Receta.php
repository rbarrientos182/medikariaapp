<?php

namespace Medikaria\Models;

use Illuminate\Database\Eloquent\Model;

class Receta extends Model
{
  protected $fillable = [
      'pacientes_id','medicos_id','diagnostico','fechaExpedicion',
  ];

  public function pacientes()
  {
    return $this->belongsTo(Paciente::class);
  }

  public function recetas()
  {
    return $this->belongsTo(Medico::class);
  }

  public function medicamentos()
  {
    return $this->belongsToMany(Medicamento::class,'medicamentos_has_recetas','recetas_id','medicamentos_id')->withPivot('dosis','periodicidad','dias','cantidad');
  }

}
