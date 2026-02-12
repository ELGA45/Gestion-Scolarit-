<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tarif;

class TarifController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tarifs = Tarif::all();
        return view('tarif.index', compact('tarifs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tarif.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'incription' => 'required|string|max:20|unique:filieres,inscription',
            'mensualite' => 'required|string|max:100|unique:filieres,mensualite',
        ]);

        tarifs::create([
            'incription' => $request->incription,
            'mensualite' => $request->mensualite,
        ]);

        return redirect()
            ->route('tarifs.index')
            ->with('success', 'Tarif créé avec succès.');
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
        $tarif = Tarif::findOrFail($id);
        return view('tarif.edit', compact('tarif'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $tarif = Tarif::findOrFail($id);

        $tarif->update([
            'incription' => $request->inscription,
            'mensualite' => $request->mensualite,
        ]);

        return redirect()
            ->route('tarifs.index')
            ->with('success', 'Tarif modifié avec succès.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $tarif = Tarif::findOrFail($id);
        $tarif->delete();

        return redirect()->route('tarifs.index')
            ->with('success', 'tarif supprimé avec succès.');
    }
}
