<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Consulta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function add(Request $request, Consulta $consulta){
        $agenda = Agenda::create([
            'usuario_id' => Auth::id(), 'consulta_id' => $consulta->id
        ]);

        return redirect()->route('consultas.show', $agenda->id)
        ->with('success', 'Consulta agendada.');
    }
}
