<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Consulta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->input('search');
        $consultas = Consulta::whereDoesntHave('agendas') // Left Join da tabela agenas
            ->when($search, function ($query, $search) {
            return $query->where('especialidade', 'like', "%{$search}%")
                ->orWhereHas('medico', function ($query) use ($search) {
                    $query->where('nome', 'like', "%{$search}%");
                })
                ->orWhere('data', 'like', "%{$search}%")
                ->orWhere('horario', 'like', "%{$search}%");
        })->get();

        return view('usuarios.dashboard', compact('consultas'));
    }


    // Novo método para exibir as consultas agendadas do paciente
    public function minhasConsultas()
    {
        $usuarioId = Auth::id();
        $consultas = Agenda::where('usuario_id', $usuarioId)
            ->with('consulta')
            ->get();

        return view('usuarios.minhasConsultas', compact('consultas'));
    }
}
