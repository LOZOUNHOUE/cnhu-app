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
    public function addPatients(Request $request){
        // Validation des données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenoms' => 'required|string',
            'adresse' => 'nullable|string',
            'personne_a_prevenir' => 'nullable|string',
            'ethnie' => 'nullable|string',
            'religion' => 'nullable|string',
            'age' => 'nullable|integer',
            'date_heure_arrivee' => 'nullable|date_time',
            'transport' => 'nullable|string',
            'motif_entree' => 'nullable|string',
            'date_naissance' => 'nullable|date',
            'telephone' => 'nullable|string',
            'profession' => 'nullable|string',
            'provenance' => 'nullable|string',
            'accompagnant' => 'nullable|string',
            'maladie_naturelle' => 'nullable|string',
            'rixe' => 'nullable|string',
        ]);

        // Création d'une nouvelle instance du modèle Patient
        $patient = new Patient;

        // Attribution des données validées au modèle
        $patient->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $patient->save();

        // Retourner une réponse de succès



        // Validation des données du formulaire
        $validatedData = $request->validate([
            'chirurgien' => 'required|string',
            'medecin' => 'required|string',
            'infirmier' => 'required|string',
            'interne' => 'required|string',
            'aide_soignant' => 'required|string',
        ]);

        // Création d'une nouvelle instance du modèle EquipeAccueil
        $equipe = new Equipe_accueil();

        // Attribution des données validées au modèle
        $equipe->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $equipe->save();

        // Retourner une réponse de succès


        // Validation des données du formulaire
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'externe' => 'required|boolean',
            'mises_en_bservation' => 'required|boolean',
            'transferHopitalisation' => 'required|boolean',
            'chirurgie' => 'required|boolean',
            'medecine' => 'required|boolean',
            'pediatrie' => 'required|boolean',
            'autre' => 'nullable|string',
            'DateHeure_arrive' => 'required|date',
            'dateHeure_sortie' => 'nullable|date',
        ]);

        // Création d'une nouvelle instance du modèle Orientation
        $orientation = new Orientation();

        // Attribution des données validées au modèle
        $orientation->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $orientation->save();

        // Retourner une réponse de succès


        // Validation des données du formulaire
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'redige_par' => 'required|string',
            'date' => 'required|date',
            'heure' => 'required|time',
            'responsable' => 'required|string',
        ]);

        // Création d'une nouvelle instance du modèle Observation
        $observation = new Observation();

        // Attribution des données validées au modèle
        $observation->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $observation->save();

        // Retourner une réponse de succès



         // Validation des données du formulaire
         $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'neurologique_conscience' => 'required|string',
            'sensibilite' => 'required|string',
            'motricite' => 'required|string',
            'convulsion' => 'required|string',
            'temperature' => 'required|numeric',
            'hemodynamique_pressionArterielle' => 'required|boolean',
            'pouls' => 'required|boolean',
            'coloration' => 'required|boolean',
            'sueur' => 'required|boolean',
            'diurèse' => 'required|boolean',
            'auscultation' => 'required|boolean',
            'respiration' => 'required|boolean',
            'frequence' => 'required|boolean',
            'paradoxale' => 'required|boolean',
            'dyspnee' => 'required|boolean',
            'gasp' => 'required|boolean',
            'apnee' => 'required|boolean',
            'satusation_oxygene' => 'required|boolean',
            'cyanose' => 'required|boolean',
            'encombrement' => 'required|boolean',
            'abdomen_ballonné' => 'required|string',
            'douleur' => 'required|string',
            'cirombili' => 'required|string',
            'plaie_diverse' => 'required|string',
            'hemorragie_externe' => 'required|string',
            'brulure' => 'required|string',
            'facture_evidente' => 'required|string',
            'diers' => 'required|string',
            'detro' => 'required|string',
            'autre' => 'nullable|string',
        ]);

        // Création d'une nouvelle instance du modèle ParametreVital
        $parametreVital = new Parametres_vitaux();

        // Attribution des données validées au modèle
        $parametreVital->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $parametreVital->save();

        // Retourner une réponse de succès


        // Validation des données du formulaire
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'antecedants_medicaux' => 'required|string',
            'antecedants_chirurgicaux' => 'required|string',
        ]);

        // Création d'une nouvelle instance du modèle Antecedent
        $antecedent = new Antecedents();

        // Attribution des données validées au modèle
        $antecedent->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $antecedent->save();

        // Retourner une réponse de succès


         // Validation des données du formulaire
         $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'alcool' => 'required|boolean',
            'allergie' => 'required|boolean',
            'tabac' => 'required|boolean',
            'obesite' => 'required|boolean',
        ]);

        // Création d'une nouvelle instance du modèle FacteurDeRisque
        $facteurDeRisque = new Facteur_de_risque();

        // Attribution des données validées au modèle
        $facteurDeRisque->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $facteurDeRisque->save();

        // Retourner une réponse de succès


        // Validation des données du formulaire
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'histoire' => 'required|string',
            'examenClinique' => 'required|string',
            'Hypothese_Diagnostique' => 'required|string',
        ]);

        // Création d'une nouvelle instance du modèle Historique
        $historique = new Historique();

        // Attribution des données validées au modèle
        $historique->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $historique->save();

        // Retourner une réponse de succès


        // Validation des données du formulaire
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'radiologie' => 'required|string',
            'echographie' => 'required|string',
            'biologie' => 'required|string',
            'ECG' => 'required|string',
            'autres' => 'nullable|string',
        ]);

        // Création d'une nouvelle instance du modèle ExamenParaClinique
        $examenParaClinique = new Examen_paraclinique();

        // Attribution des données validées au modèle
        $examenParaClinique->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $examenParaClinique->save();

        // Retourner une réponse de succès


        // Validation des données du formulaire
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'conclusion' => 'required|string',
            'diagnostic' => 'required|string',
        ]);

        // Création d'une nouvelle instance du modèle ConclusionsDiagnostiques
        $conclusionsDiagnostiques = new Conclusion_diagnostic();

        // Attribution des données validées au modèle
        $conclusionsDiagnostiques->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $conclusionsDiagnostiques->save();

        // Retourner une réponse de succès


        // Validation des données du formulaire
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'gestesTechniques_abordVeineux' => 'nullable|boolean',
            'oxygene' => 'nullable|boolean',
            'guedel' => 'nullable|boolean',
            'ventilation' => 'nullable|boolean',
            'sondeVesical' => 'nullable|boolean',
            'intubation' => 'nullable|boolean',
            'sondegastrique' => 'nullable|boolean',
            'massage_cardiaque' => 'nullable|boolean',
            'drainage_pleural' => 'nullable|boolean',
            'perfusions_qualité' => 'nullable|string',
            'perfusions_quantité' => 'nullable|string',
            'anticonvulsivants_Sedatifs' => 'nullable|boolean',
            'antipyrétique' => 'nullable|boolean',
            'antalgiques' => 'nullable|boolean',
            'antiinflammatoires' => 'nullable|boolean',
            'antipaludeens' => 'nullable|boolean',
            'antibiotiques' => 'nullable|boolean',
            'cardiotoniques' => 'nullable|boolean',
            'bronchodilatateursIV' => 'nullable|boolean',
            'corticoides' => 'nullable|boolean',
            'diuretiques' => 'nullable|boolean',
            'antiemetiques' => 'nullable|boolean',
            'ventoline Spray' => 'nullable|boolean',
            'autres_Antiparasitaires' => 'nullable|string',
            'autres_Medicaments' => 'nullable|string',
        ]);

        // Création d'une nouvelle instance du modèle SoinsUrgents
        $soinsUrgents = new Soins_urgent();

        // Attribution des données validées au modèle
        $soinsUrgents->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $soinsUrgents->save();

        // Retourner une réponse de succès


        // Validation des données du formulaire
        $validatedData = $request->validate([
            'patient_id' => 'required|exists:patients,id',
            'decision_prise' => 'required|string',
            'heure' => 'required|date_format:H:i:s',
            'Bloc_operatoire' => 'required|string',
            'Type_intervention' => 'required|string',
        ]);

        // Création d'une nouvelle instance du modèle ActesChirurgicals
        $actesChirurgicals = new ActesChirurgicals();

        // Attribution des données validées au modèle
        $actesChirurgicals->fill($validatedData);

        // Enregistrement du modèle dans la base de données
        $actesChirurgicals->save();

        // Retourner une réponse de succès
        return response()->json(['message' => 'Les données du formulaire ont été enregistrés avec succès.'], 201);
    }
}
