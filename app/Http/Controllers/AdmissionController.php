<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class AdmissionController extends Controller
{
    public function create()
    {
        return view('admissions.create'); // Vue pour le formulaire d'admission
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numero_dossier' => 'required|string|max:255',
            'date' => 'required|date',
            'heure_arrivee' => 'required|date_format:H:i',
            // Ajoutez toutes les autres validations ici
        ]);

        $patient = new Patient($validatedData);
        $patient->save();

        return redirect()->route('patients.index')->with('success', 'Patient ajouté avec succès');
    }
}
