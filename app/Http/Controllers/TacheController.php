<?php
namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Tache;
use Illuminate\Http\Request;

class TacheController extends Controller
{
    // Afficher tache
    public function index(Projet $projet)
    {
        $taches = $projet->taches;
        return view('taches.index', compact('taches', 'projet'));
    }

    // Afficher lfrom pache tzid tache
    public function create(Projet $projet)
    {
        return view('taches.create', compact('projet'));
    }

    // Enregistrer tache
    public function store(Request $request, Projet $projet)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'nullable',
            'statut' => 'required|in:en_cours,en_attente,livree',
        ]);

        Tache::create([
            'titre' => $request->titre,
            'description' => $request->description,
            'statut' => $request->statut,
            'projet_id' => $projet->id,
        ]);

        return redirect()->route('projets.taches.index', $projet)->with('success', 'Tâche créée avec succès.');
    }

    // Afficher détails dyal tache
    public function show(Projet $projet, Tache $tache)
    {
        return view('taches.show', compact('projet', 'tache'));
    }
    // Afficher lfrom dyal update tache
    public function edit(Projet $projet, Tache $tache)
    {
        return view('taches.edit', compact('projet', 'tache'));
    }

    // update tache
    public function update(Request $request, Projet $projet, Tache $tache)
    {
        $request->validate([
            'titre' => 'required',
            'description' => 'nullable',
            'statut' => 'required|in:en_cours,en_attente,livree',
        ]);

        $tache->update([
            'titre' => $request->titre,
            'description' => $request->description,
            'statut' => $request->statut,
        ]);

        return redirect()->route('projets.taches.index', $projet)->with('success', 'Tâche mise à jour avec succès.');
    }

    // Supprimer tache
    public function destroy(Projet $projet, Tache $tache)
    {
        $tache->delete();
        return redirect()->route('projets.taches.index', $projet)->with('success', 'Tâche supprimée avec succès.');
    }
}