<?php

namespace App\Http\Controllers;

use App\Models\Filiere;
use Illuminate\Http\Request;

class FiliereController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $filieres = Filiere::all();
        return view('filiere.index', compact('filieres'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('filiere.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'code' => 'required|string|max:20|unique:filieres,code_filiere',
            'nom' => 'required|string|max:100|unique:filieres,nom_filiere',
        ]);

        Filiere::create([
            'code_filiere' => $request->code,
            'nom_filiere' => $request->nom,
        ]);

        return redirect()
            ->route('filieres.index')
            ->with('success', 'Filière créée avec succès.');
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
    public function edit(string $id)
    {
        $filiere = Filiere::findOrFail($id);
        return view('filiere.edit', compact('filiere'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $filiere = Filiere::findOrFail($id);

        $filiere->update([
            'code_filiere' => $request->code,
            'nom_filiere' => $request->nom,
        ]);

        return redirect()
            ->route('filieres.index')
            ->with('success', 'Filière modifiée avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $filiere = Filiere::findOrFail($id);
        $filiere->delete();

        return redirect()->route('filieres.index')
            ->with('success', 'Filière supprimée avec succès.');
    }
}
