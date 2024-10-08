<?php

namespace App\Http\Controllers;

use App\Models\Consulta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConsultaController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = Auth::user();
        $consultas = Consulta::where('medico_id', $usuario->id)
            ->orderBy('data')
            ->get();

        return view('consultas.index', compact('consultas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('consultas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'data' => 'required|date',
            'horario' => 'required|date_format:H:i',
            'especialidade' => 'required',
            'medico_id' => 'required',
            'localidade' => 'required'
        ]);

        // Verifica se já existe uma consulta para o mesmo médico na mesma data e horário
        $existeConsulta = Consulta::where('data', $dados['data'])
            ->where('horario', $dados['horario'])
            ->where('medico_id', $dados['medico_id'])
            ->exists();


        if ($existeConsulta) {
            return redirect()->back()
                ->withErrors(['horario' => 'Já existe uma consulta agendada para este horário.'])
                ->withInput();
        }

        Consulta::create($dados);

        return redirect()->route('consultas.index')
            ->with('success', 'Consulta criada com sucesso.');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Consulta $consulta)
    {
        return view('consultas.edit', compact('consulta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Consulta $consulta)
    {
        $dados = $request->validate([
            'data' => 'required|date',
            'horario' => 'required|date_format:H:i',
            'especialidade' => 'required',
            'medico_id' => 'required',
            'localidade' => 'required',
        ]);

        $consulta->update($dados);

        return redirect()->route('consultas.index')
            ->with('success', 'Consulta atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consulta $consulta)
    {
        // Excluir todos os registros relacionados na tabela `agendas`
        $consulta->agendas()->delete();

        // Excluir a consulta
        $consulta->delete();

        return redirect()->route('consultas.index')
            ->with('success', 'Consulta deletada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Consulta $consulta)
    {
        return view('consultas.show', compact('consulta'));
    }
}
