<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    use HasFactory;

    protected $fillable = [
        'horario',
        'data',
        'especialidade',
        'medico_id',
        'localidade'
    ];

    public function medico()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function agendas()
    {
        return $this->hasMany(Agenda::class);
    }
}
