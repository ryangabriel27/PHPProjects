<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;

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
}
