<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'nome', 'email', 'password', 'tipo'
    ];

    protected $hidden = [
        'password', 'remember_token'
    ];

    public function inscricoes()
    {
        return $this->hasMany(Agenda::class);
    }

    public function isPaciente()
    {
        return $this->tipo === 'paciente';
    }
    
    public function isMedico()
    {
        return $this->tipo === 'medico';
    }
}
