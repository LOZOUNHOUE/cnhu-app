<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../../dashboard1/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../../dashboard1/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../dashboard1/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../dashboard1/assets/images/favicon.png" />
</head>
<style>
    .scrollable-form {
        height: 80vh;
        /* Hauteur fixe pour le conteneur */
        overflow-y: auto;
        /* Activation de la barre de défilement verticale */
        padding: 20px;
        /* Espacement interne pour le contenu */
    }
</style>

<body style="background-color: ">
    @include('layouts.sidebar')
    @if(session('success'))
    <div style="
        background-color: #d4edda;
        border-color: #c3e6cb;
        color: #155724;
        padding: 1rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
        position: relative;
    ">
        {{ session('success') }}
        <button type="button" style="
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.75rem 1.25rem;
            color: inherit;
            background-color: transparent;
            border: 0;
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            text-shadow: 0 1px 0 #fff;
            opacity: 0.5;
        " onclick="this.parentElement.style.display='none';">
            &times;
        </button>
    </div>
@endif

@if(session('error'))
    <div style="
        background-color: #f8d7da;
        border-color: #f5c6cb;
        color: #721c24;
        padding: 1rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
        position: relative;
    ">
        {{ session('error') }}
        <button type="button" style="
            position: absolute;
            top: 0;
            right: 0;
            padding: 0.75rem 1.25rem;
            color: inherit;
            background-color: transparent;
            border: 0;
            float: right;
            font-size: 1.5rem;
            font-weight: 700;
            line-height: 1;
            text-shadow: 0 1px 0 #fff;
            opacity: 0.5;
        " onclick="this.parentElement.style.display='none';">
            &times;
        </button>
    </div>
@endif

<!-- Le reste de votre contenu de page ici -->

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif

<!-- Le reste de votre contenu de page ici -->
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo-mini" href="../../index.html"><img
                        src="../../assets/images/logo-mini.svg" alt="logo" /></a>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Liste des patients</h4>
                        <!-- Formulaire de recherche -->

                        <p class="card-description"><code>patient</code></p>
                        <div class="table-responsive">
                            <div class="scrollable-form">
                                <form action="/ajouter_patient" method="post">
                                    @csrf
                                    {{-- <div class="form-block">
                                        <h2>Dossier</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Numéro dossier">Numéro dossier:</label>
                                                <input type="text" id="Numéro dossier" name="dossier_number"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="date">Date:</label>
                                                <input type="date" id="date" name="dossier_date"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="heure d'arrivé">Heure d'arrivé:</label>
                                                <input type="time" id="heure d'arrivé" name="heure_arrive"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="form-block">
                                        <h2>Informations Personnelles Patient</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="nom">Nom</label>
                                                <input type="text" id="nom" name="nom" class="form-control"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="prénom">Prénom</label>
                                                <input type="text" id="prénom" name="prenoms" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Adresse">Adresse</label>
                                                <input type="text" id="Adresse" name="adresse" class="form-control"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="religion">Religion</label>
                                                <input type="text" id="religion" name="religion"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="ethnie">Ethnie</label>
                                                <input type="text" id="ethnie" name="ethnie" class="form-control"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="profession">Profession</label>
                                                <input type="text" id="profession" name="profession"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="provenance">Provenance</label>
                                                <input type="text" id="provenance" name="provenance"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="telephone">Téléphone:</label>
                                                <input type="text" id="telephone" name="telephone"
                                                    class="form-control" pattern="\d{8}"
                                                    title="Entrez un numéro de téléphone valide de 10 chiffres"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="date_naissance">Date de naissance</label>
                                                <input type="date" id="date_naissance" name="date_naissance"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="sexe">Sexe</label>
                                                <select id="sexe" name="sexe" class="form-control" required>
                                                    <option value="">Sélectionner...</option>
                                                    <option value="homme">Homme</option>
                                                    <option value="femme">Femme</option>
                                                    <option value="autre">Autre</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="motif d'entré">Motif d'entré</label>
                                                <input type="text" id="motif d'entré" name="motif_entree"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Personne à contacter">Personne à contacter</label>
                                                <input type="text" id="Personne à contacter"
                                                    name="personne_a_prevenir" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Maladie naturelle">Maladie naturelle</label>
                                                <input type="text" id="Maladie naturelle" name="maladie_naturelle"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Moyen de transport">Moyen de transport</label>
                                                <input type="text" id="Moyen de transport"
                                                    name="transport" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Date d'entrée">Date d'entrée</label>
                                                <input type="date" id="Date d'entrée" name="date_heure_arrivee"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Accompagné de">Accompagné de</label>
                                                <input type="text" id="Accompagné de" name="accompagnant"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- <div class="form-block">
                                        <h3>Equipe d'accueil</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Chirurgien">Chirurgien:</label>
                                                <input type="text" id="Chirurgien" name="chirurgie"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Médécin">Médécin:</label>
                                                <input type="text" id="Médécin" name="medecin"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Interne">Interne:</label>
                                                <input type="text" id="Interne" name="interne"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Infirmier">Infirmier:</label>
                                                <input type="text" id="Infirmier" name="infirmier"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Aide-Soignant">Aide-Soignant:</label>
                                                <input type="text" id="Aide-Soignant" name="aide-soignant"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-block">
                                        <h3>Orientaion</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Externe">Externe:</label>
                                                <input type="checkbox" id="Externe" name="orientation"
                                                    value="Externe">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Hospitalisé">Mise en observation:</label>
                                                <input type="checkbox" id="Hospitalisé" name="orientation"
                                                    value="Hospitalisé">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Bloc opératoire">Transfert</label>
                                                <input type="checkbox" id="Bloc opératoire" name="orientation"
                                                    value="Bloc opératoire">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Réanimation">Hopitalisation :</label>
                                                <input type="checkbox" id="Réanimation" name="orientation"
                                                    value="Réanimation">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="sexe">Service</label>
                                                <select id="sexe" name="sexe" class="form-control" required>
                                                    <option value="">Sélectionner...</option>
                                                    <option value="homme">Pediatrie</option>
                                                    <option value="femme">Medecine</option>
                                                    <option value="autre">Chirurgie</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Niveau Socio-économique">Descision de transfert
                                                    par:</label>
                                                <input type="text" id="Niveau Socio-économique"
                                                    name="socio-economique" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="date_naissance">Date de sortie</label>
                                                <input type="date" id="date_sortie" name="date_sortie"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-block">
                                        <h3>Observation</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Externe">redigé par:</label>
                                                <input type="text" id="Externe" name="orientation"
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Hospitalisé">Date:</label>
                                                <input type="date" id="date" name="date"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Bloc opératoire">Lieu</label>
                                                <input type="text" id="Lieu" name="lieu"
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Réanimation"> Responsable :</label>
                                                <input type="text" id="responsable" name="responsable"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="form-block">
                                        <h2>Etat de paramettre vitaux à l'admission</h2>
                                        <h4>Neurologique</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Numéro dossier">Conscience:</label>
                                                <input type="checkbox" id="Réanimation" name="Orientaion"
                                                    value="Réanimation">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="">Motricité:</label>
                                                <input type="text" id="" name="date" class="form-control"
                                                    required>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Température:</label>
                                                    <input type="text" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Sensibilité:</label>
                                                    <input type="text" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Convulsion:</label>
                                                    <input type="text" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-block">
                                            <h4>Hemodynamique</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="Numéro dossier">PA:</label>
                                                    <input type="checkbox" id="Réanimation" name="Orientaion"
                                                        value="Réanimation">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Pouls:</label>
                                                    <input type="checkbox" id="" name="date"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Coloration:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Sueurs:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Diurèse:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Auscullation:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-block">
                                            <h4>Respiration</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="Numéro dossier">FR:</label>
                                                    <input type="checkbox" id="Réanimation" name="Orientaion"
                                                        value="Réanimation">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="rdgd">Dyspnée:</label>
                                                    <input type="checkbox" id="" name="date"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">R.Paradoxale</R>:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Gasp:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Apnée:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">S.P.O2:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Cyanose:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Encombrement:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-block">
                                                <h4>Abdomen</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="Numéro dossier">Ballonné:</label>
                                                        <input type="text" id="Réanimation" name="Orientaion"
                                                            value="Réanimation">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Douleur:</label>
                                                        <input type="text" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Cirombilic:</label>
                                                        <input type="text" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Autre:</label>
                                                        <input type="text" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-block">
                                                <h4>Abdomen</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="Numéro dossier">Externe:</label>
                                                        <input type="checkbox" id="Réanimation" name="Orientaion"
                                                            value="Réanimation">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Fracture evidente:</label>
                                                        <input type="checkbox" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Brulure:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Plaies diverse:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Divers:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Dextro:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-block">
                                                <h4>Antécédent</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="Numéro dossier">Antécédent médicaux:</label>
                                                        <input type="text" id="Réanimation" name="Orientaion"
                                                            value="Réanimation">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Antécédent médicaux:</label>
                                                        <input type="text" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-block">
                                                <h4>Facture de risque</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="Numéro dossier">Alcool:</label>
                                                        <input type="checkbox" id="Réanimation" name="Orientaion"
                                                            value="Réanimation">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Tabac:</label>
                                                        <input type="checkbox" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Allergie:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Obesité:</label>
                                                    <input type="text" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-block">
                                            <h4>Histoire</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="Numéro dossier">Histoire brève:</label>
                                                    <input type="text" id="Réanimation" name="Orientaion"
                                                        value="Réanimation">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Examen clinique détaillé:</label>
                                                    <input type="text" id="" name="date"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Hypothése:</label>
                                                    <input type="text" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-block">
                                            <h4>Examin paraclinique </h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="Numéro dossier">Radiologie:</label>
                                                    <input type="checkbox" id="Réanimation" name="Orientaion"
                                                        value="Réanimation">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Echographie:</label>
                                                    <input type="checkbox" id="" name="date"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Biologie:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">ECG:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Autre:</label>
                                                    <input type="text" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-block">
                                            <h4>Conclusion et diagnostic</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="Numéro dossier">Diagnostic:</label>
                                                    <input type="text" id="Réanimation" name="Orientaion"
                                                        value="Réanimation">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Conclusion:</label>
                                                    <input type="text" id="" name="date"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                        </div>



                                        <div class="form-block">
                                            <h2>Soins Urgents effectués au C.U.A.U</h2>
                                            <h4>Gestes Techniques</h4>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="Numéro dossier">Oxgène:</label>
                                                    <input type="checkbox" id="Réanimation" name="Orientaion"
                                                        value="Réanimation">
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="">Abord veineux:</label>
                                                    <input type="checkbox" id="" name="date"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé"> Sonde vésitale:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Sonde gastrique:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Guedel:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Ventilation:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Intubation:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Massage cardiaque:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Drainage pleural:</label>
                                                    <input type="checkbox" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Autre:</label>
                                                    <input type="text" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>

                                            <div class="form-block">
                                                <h4>Perfusion</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="Numéro dossier">Qualité:</label>
                                                        <input type="checkbox" id="Réanimation" name="Orientaion"
                                                            value="Réanimation">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Quantité:</label>
                                                        <input type="text" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-block">
                                                <h4>Medication administrés</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="Numéro dossier">Anticonsulsivant et
                                                            sedatif:</label>
                                                        <input type="checkbox" id="Réanimation" name="Orientaion"
                                                            value="Réanimation">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Antalgique:</label>
                                                        <input type="checkbox" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Antipyrétique:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Anti-inflammatoires:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Antipaludéens:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Antibiotiques:</label>
                                                        <input type="checkbox" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Antibiotiques:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Bronchodilatateurs IV:</label>
                                                        <input type="checkbox" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Corticoïdes:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Ventoline_spray:</label>
                                                        <input type="checkbox" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Diurétiques:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Antiémétiques:</label>
                                                        <input type="checkbox" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Antiémétiques:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="">Autre_médicament_et_antiparasitaire:
                                                            :</label>
                                                        <input type="text" id="" name="text"
                                                            class="form-control" required>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-block">
                                                <h4>Acte Chirurgical</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="Numéro dossier">Décision_par:</label>
                                                        <input type="checkbox" id="Réanimation" name="Orientaion"
                                                            value="Réanimation">
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="">Heure:</label>
                                                        <input type="text" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <label for="heure d'arrivé">Bloc_opératoire:</label>
                                                            <input type="text" id="heure d'arrivé"
                                                                name="heure d'arrivé" class="form-control" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="heure d'arrivé">Type_intervention:</label>
                                                            <input type="text" id="heure d'arrivé"
                                                                name="heure d'arrivé" class="form-control" required>
                                                        </div>
                                                    </div>
                                                </div>
 --}}
                                                <input type="submit" value="Submit" class="btn btn-primary mt-4">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>

</html>
