<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{
    use HasFactory;

    protected $fillable = [
        'usuario_id', 'consulta_id', 'status'
    ];
    
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    public function consulta()
    {
        return $this->belongsTo(Consulta::class);
    }
}
