<?php

namespace Medikaria\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','activo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function medicos()
    {
        return $this->hasOne(Medico::class);
    }

    public function pacientes()
    {
        return $this->hasOne(Paciente::class);
    }

    public function datos_bancarios()
    {
        return $this->hasMany(DatoBancario::class);
    }

    public function historial_pagos()
    {
        return $this->hasMany(HistorialPago::class);
    }
}
