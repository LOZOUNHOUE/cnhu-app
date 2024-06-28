<?php

namespace App\Http\Controllers;

use App\Models\ActesChirurgicals;
use App\Models\Antecedents;
use App\Models\Conclusion_diagnostic;
use App\Models\Equipe_accueil;
use App\Models\Examen_paraclinique;
use App\Models\Facteur_de_risque;
use App\Models\Historique;
use App\Models\Observation;
use App\Models\Orientation;
use App\Models\Parametres_vitaux;
use App\Models\Patient;
use App\Models\Soins_urgent;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class patientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('patient');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ajout_patient');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'nom'  => 'required|max:255',
            'nom'  => 'required|max:255',
            'nom'  => 'required|max:255',
            'nom'  => 'required|max:255',
            'nom'  => 'required|max:255',
            'nom'  => 'required|max:255',
            'nom'  => 'required|max:255',
            'nom'  => 'required|max:255',
            'nom'  => 'required|max:255',
            'nom'  => 'required|max:255',
            'nom'  => 'required|max:255',

        ]);


        $patient = Patient::create([

            'nom' => $request->nom,
            'nom' => $request->nom,
            'nom' => $request->nom,
            'nom' => $request->nom,
            'nom' => $request->nom,
            'nom' => $request->nom,
            'nom' => $request->nom,
            'nom' => $request->nom,
            'nom' => $request->nom,
            'nom' => $request->nom,
            'nom' => $request->nom,
            'nom' => $request->nom,


        ]);


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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
        // dd($request->all());
       public function addPatient(Request $request){
        try {
            $validatedData = $request->validate([
                'nom' => 'required|string|max:255',
                   'prenoms' => 'required|string|max:255',
                   'adresse' => 'required|string|max:255',
                   'religion' => 'required|string|max:255',
                   'ethnie' => 'required|string|max:255',
                   'profession' => 'required|string|max:255',
                   'provenance' => 'required|string|max:255',
                   'telephone' => 'required|string|size:8',
                   'date_naissance' => 'required|date',
                   'sexe' => 'required|in:homme,femme,autre',
                   'motif_entree' => 'required|string|max:255',
                   'personne_a_prevenir' => 'required|string|max:255',
                   'maladie_naturelle' => 'required|string|max:255',
                   'transport' => 'required|string|max:255',
                   'date_heure_arrivee' => 'required|date',
                   'accompagnant' => 'required|string|max:255',
               ]);
            //    dd($validatedData);
               $patient = Patient::create($validatedData);
               return redirect()->route('patient.create')->with('success', 'Patient ajouté avec succès');
        } catch (\Throwable $th) {
            dd($th);
        }

}
}
