<?php

namespace App\Http\Controllers;

use App\Models\Vaga;
use Illuminate\Http\Request;

class VagaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        //
        $vagas = Vaga::all();
        return view('vagas.index', compact('vagas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('vagas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $dados = $request->validate([
            'titulo' => 'required|string|max:100|',
            'descricao' => 'required|string',
            'localizacao' => 'required|string',
            'salario' => 'required|numeric',
            'empresa' => 'required'
        ]);

        Vaga::create($dados);

        return redirect()->route('vagas.index')->with('success', 'Vaga criado com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vaga $vaga)
    {
        //
        return view('vagas.edit', compact('vaga'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vaga $vaga)
    {
        //
        $dados = $request->validate([
            'titulo' => 'required|string|max:100|',
            'descricao' => 'required|string',
            'localizacao' => 'required|string',
            'salario' => 'required|numeric',
            'empresa' => 'required|string'
        ]);

        $vaga -> update($dados);

        return redirect()->route('vagas.index')->with('success', 'Vaga atualizada com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vaga $vaga)
    {

        $vaga -> delete($vaga);

        return redirect()->route('vagas.index')->with('success', 'Vaga excluida com sucesso!');
    }
}
