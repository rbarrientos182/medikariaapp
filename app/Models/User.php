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
        'name','nombre', 'email', 'password','activo','foto',
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
        return $this->hasOne(Medico::class,'users_id');
    }

    public function datos_bancarios()
    {
        return $this->hasOne(DatoBancario::class,'users_id');
    }

    public function historial_pagos()
    {
        return $this->hasMany(HistorialPago::class,'users_id');
    }
}
