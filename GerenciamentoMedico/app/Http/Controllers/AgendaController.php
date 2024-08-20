<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Consulta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller
{
    public function add(Request $request, Consulta $consulta)
    {

        // Valida se o paciente já tem uma consulta agendada para o mesmo horário e data
        $existeConsulta = Agenda::join('consultas', 'agendas.consulta_id', '=', 'consultas.id')
            ->where('consultas.data', $consulta->data)
            ->where('consultas.horario', $consulta->horario)
            ->where('agendas.usuario_id', Auth::id())
            ->exists();

        if ($existeConsulta) {
            return redirect()->back()
                ->withErrors(['horario' => 'Você já tem uma consulta agendada para este horário.'])
                ->withInput();
        }

        // Adiciona a consulta à agenda
        $agenda = Agenda::create([
            'usuario_id' => Auth::id(),
            'consulta_id' => $consulta->id,
        ]);

        return redirect()->route('consultas.show', $agenda->id)
            ->with('success', 'Consulta agendada com sucesso.');
    }
}
