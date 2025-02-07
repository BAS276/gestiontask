<?php
namespace App\Http\Controllers;

use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    // Afficher lprojets
    public function index()
    {
        $projets = Projet::where('user_id', auth()->id())->get();
        return view('projets.index', compact('projets'));
    }

    // Afficher lfrom pache tzid lprojet
    public function create()
    {
        return view('projets.create');
    }

    // Enregistrer projet
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'nullable',
        ]);

        Projet::create([
            'nom' => $request->nom,
            'description' => $request->description,
            'user_id' => auth()->id(),
        ]);

        return redirect()->route('projets.index')->with('success', 'Projet créé avec succès.');
    }

    // Afficher détails dyal projet
    public function show(Projet $projet)
    {
        return view('projets.show', compact('projet'));
    }

    // Afficher lfrom dyal update projet
    public function edit(Projet $projet)
    {
        return view('projets.edit', compact('projet'));
    }

    // update projet
    public function update(Request $request, Projet $projet)
    {
        $request->validate([
            'nom' => 'required',
            'description' => 'nullable',
        ]);

        $projet->update($request->all());
        return redirect()->route('projets.index')->with('success', 'Projet mis à jour avec succès.');
    }

    // Supprimer projet
    public function destroy(Projet $projet)
    {
        $projet->delete();
        return redirect()->route('projets.index')->with('success', 'Projet supprimé avec succès.');
    }
}