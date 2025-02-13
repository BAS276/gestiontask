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

    // Supprimer tache
    public function destroy(Projet $projet, Tache $tache)
    {
        $tache->delete();
        return redirect()->route('projets.taches.index', $projet);
    }
}