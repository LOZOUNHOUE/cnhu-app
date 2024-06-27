<?php

namespace App\Http\Controllers;

use App\Models\Personnel;
use Illuminate\Http\Request;

class PersonnelController extends Controller
{
    // Affiche la liste du personnel
    public function index()
    {
        $personnels = Personnel::all();
        return view('personnel', compact('personnels'));
    }

    // Affiche le formulaire pour créer un nouvel employé
    public function create()
    {
        return view('personnel.create');
    }

    // Enregistre un nouvel employé
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'rôle' => 'required',
            // Ajoutez d'autres validations si nécessaire
        ]);

        Personnel::create($request->all());

        return redirect()->route('personnel')
            ->with('success', 'Employé ajouté avec succès.');
    }

    // Affiche les détails d'un employé
    public function show(Personnel $personnel)
    {
        return view('personnel.show', compact('personnel'));
    }

    // Affiche le formulaire pour modifier un employé
    public function edit(Personnel $personnel)
    {
        return view('personnel.edit', compact('personnel'));
    }

    // Met à jour les informations d'un employé
    public function update(Request $request, Personnel $personnel)
    {
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            // Ajoutez d'autres validations si nécessaire
        ]);

        $personnel->update($request->all());

        return redirect()->route('personnel')
            ->with('success', 'Employé mis à jour avec succès.');
    }

    // Supprime un employé
    public function destroy(Personnel $personnel)
    {
        $personnel->delete();

        return redirect()->route('personnel')
            ->with('success', 'Employé supprimé avec succès.');
    }
}
