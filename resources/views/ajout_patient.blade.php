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
                                    <div class="form-block">
                                        <h2>Dossier</h2>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Numéro dossier">Numéro dossier:</label>
                                                <input type="text" id="Numéro dossier" name="Numéro dossier"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="date">Date:</label>
                                                <input type="date" id="date" name="date" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="heure d'arrivé">Heure d'arrivé:</label>
                                                <input type="time" id="heure d'arrivé" name="heure d'arrivé"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
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
                                                <input type="text" id="prénom" name="prénoms" class="form-control"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Adresse">Adresse</label>
                                                <input type="text" id="Adresse" name="Adresse" class="form-control"
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
                                                <input type="text" id="personne_a_prevenir"
                                                    name="Personne à contacter" class="form-control" required>
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
                                            <div class="col-md-6">
                                                <label for="Rixe">Rixe</label>
                                                <input type="text" id="Rixe" name="rixe"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-block">
                                        <h3>Equipe d'accueil</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Chirurgien">Chirurgien:</label>
                                                <input type="text" id="Chirurgien" name="Chirurgien"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Médécin">Médécin:</label>
                                                <input type="text" id="Médécin" name="Médécin"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Interne">Interne:</label>
                                                <input type="text" id="Interne" name="Interne"
                                                    class="form-control" required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Infirmier">Infirmier:</label>
                                                <input type="text" id="Infirmier" name="Infirmier"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Aide-Soignant">Aide-Soignant:</label>
                                                <input type="text" id="Aide-Soignant" name="Aide-Soignant"
                                                    class="form-control" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-block">
                                        <h3>Orientaion</h3>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Externe">Externe:</label>
                                                <input type="checkbox" id="Externe" name="Orientaion"
                                                    value="Externe">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Hospitalisé">Mise en observation:</label>
                                                <input type="checkbox" id="Hospitalisé" name="Orientaion"
                                                    value="Hospitalisé">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Bloc opératoire">Transfert</label>
                                                <input type="checkbox" id="Bloc opératoire" name="Orientaion"
                                                    value="Bloc opératoire">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Réanimation">Hopitalisation :</label>
                                                <input type="checkbox" id="Réanimation" name="Orientaion"
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
                                                    name="Niveau Socio-économique" class="form-control" required>
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
                                                <input type="text" id="Externe" name="Orientaion"
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
                                                <input type="text" id="Lieu" name="Lieu"
                                                    class="form-control">
                                            </div>
                                            <div class="col-md-6">
                                                <label for="Réanimation"> Responsable :</label>
                                                <input type="text" id="responsable" name="responsable"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-block">
                                        <h2>Etat de paramettre vitaux à l'admission</h2>
                                        <h4>Neurologique</h4>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="Numéro dossier">Conscience:</label>
                                                <input type="checkbox" id="Réanimation" name="Orientaion"
                                                    value="Réanimation">
                                            </div>

                                            <div class="row">

                                                <div class="col-md-6">
                                                    <label for="">Motricité:</label>
                                                    <input type="text" id="" name="date"
                                                        class="form-control" required>
                                                </div>
                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Température:</label>
                                                    <input type="text" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-6">
                                                    <label for="heure d'arrivé">Sensibilité:</label>
                                                    <input type="text" id="heure d'arrivé" name="heure d'arrivé"
                                                        class="form-control" required>
                                                </div>
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

                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label for="">Pouls:</label>
                                                        <input type="checkbox" id="" name="date"
                                                            class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Coloration:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Sueurs:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Diurèse:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="heure d'arrivé">Auscullation:</label>
                                                        <input type="checkbox" id="heure d'arrivé"
                                                            name="heure d'arrivé" class="form-control" required>
                                                    </div>
                                                </div>

                                                <h4>Respiration</h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <label for="Numéro dossier">FR:</label>
                                                        <input type="checkbox" id="Réanimation" name="Orientaion"
                                                            value="Réanimation">
                                                    </div>

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <label for="rdgd">Dyspnée:</label>
                                                            <input type="checkbox" id="" name="date"
                                                                class="form-control" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="heure d'arrivé">R.Paradoxale</R>:</label>
                                                            <input type="checkbox" id="heure d'arrivé"
                                                                name="heure d'arrivé" class="form-control" required>
                                                        </div>
                                                    </div>
                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <label for="heure d'arrivé">Gasp:</label>
                                                            <input type="checkbox" id="heure d'arrivé"
                                                                name="heure d'arrivé" class="form-control" required>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <label for="heure d'arrivé">Apnée:</label>
                                                            <input type="checkbox" id="heure d'arrivé"
                                                                name="heure d'arrivé" class="form-control" required>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="heure d'arrivé">S.P.O2:</label>
                                                                <input type="checkbox" id="heure d'arrivé"
                                                                    name="heure d'arrivé" class="form-control"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="heure d'arrivé">Cyanose:</label>
                                                                <input type="checkbox" id="heure d'arrivé"
                                                                    name="heure d'arrivé" class="form-control"
                                                                    required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label for="heure d'arrivé">Encombrement:</label>
                                                                <input type="checkbox" id="heure d'arrivé"
                                                                    name="heure d'arrivé" class="form-control"
                                                                    required>
                                                            </div>
                                                        </div>




                                                        <h4>Abdomen</h4>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <label for="Numéro dossier">Ballonné:</label>
                                                                <input type="text" id="Réanimation"
                                                                    name="Orientaion" value="Réanimation">
                                                            </div>

                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <label for="">Douleur:</label>
                                                                    <input type="text" id=""
                                                                        name="date" class="form-control" required>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <label for="heure d'arrivé">Cirombilic:</label>
                                                                    <input type="text" id="heure d'arrivé"
                                                                        name="heure d'arrivé" class="form-control"
                                                                        required>
                                                                </div>
                                                            </div>
                                                            <div class="row">

                                                                <div class="col-md-6">
                                                                    <label for="heure d'arrivé">Autre:</label>
                                                                    <input type="text" id="heure d'arrivé"
                                                                        name="heure d'arrivé" class="form-control"
                                                                        required>
                                                                </div>

                                                            </div>



                                                            <h4>Abdomen</h4>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <label for="Numéro dossier">Externe:</label>
                                                                    <input type="checkbox" id="Réanimation"
                                                                        name="Orientaion" value="Réanimation">
                                                                </div>

                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <label for="">Fracture
                                                                            evidente:</label>
                                                                        <input type="checkbox" id=""
                                                                            name="date" class="form-control"
                                                                            required>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="heure d'arrivé">Brulure:</label>
                                                                        <input type="checkbox" id="heure d'arrivé"
                                                                            name="heure d'arrivé" class="form-control"
                                                                            required>
                                                                    </div>
                                                                </div>
                                                                <div class="row">

                                                                    <div class="col-md-6">
                                                                        <label for="heure d'arrivé">Plaies
                                                                            diverse:</label>
                                                                        <input type="checkbox" id="heure d'arrivé"
                                                                            name="heure d'arrivé" class="form-control"
                                                                            required>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="heure d'arrivé">Divers:</label>
                                                                        <input type="checkbox" id="heure d'arrivé"
                                                                            name="heure d'arrivé" class="form-control"
                                                                            required>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <label for="heure d'arrivé">Dextro:</label>
                                                                        <input type="checkbox" id="heure d'arrivé"
                                                                            name="heure d'arrivé" class="form-control"
                                                                            required>
                                                                    </div>
                                                                </div>


                                                                <h4>Antécédent</h4>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="Numéro dossier">Antécédent
                                                                            médicaux:</label>
                                                                        <input type="text" id="Réanimation"
                                                                            name="Orientaion" value="Réanimation">
                                                                    </div>

                                                                    <div class="row">

                                                                        <div class="col-md-6">
                                                                            <label for="">Antécédent
                                                                                médicaux:</label>
                                                                            <input type="text" id=""
                                                                                name="date" class="form-control"
                                                                                required>
                                                                        </div>
                                                                    </div>



                                                                    <h4>Facture de risque</h4>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label for="Numéro dossier">Alcool:</label>
                                                                            <input type="checkbox" id="Réanimation"
                                                                                name="Orientaion" value="Réanimation">
                                                                        </div>

                                                                        <div class="row">

                                                                            <div class="col-md-6">
                                                                                <label for="">Tabac:</label>
                                                                                <input type="checkbox" id=""
                                                                                    name="date"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    for="heure d'arrivé">Allergie:</label>
                                                                                <input type="checkbox"
                                                                                    id="heure d'arrivé"
                                                                                    name="heure d'arrivé"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="row">

                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    for="heure d'arrivé">Obesité:</label>
                                                                                <input type="text"
                                                                                    id="heure d'arrivé"
                                                                                    name="heure d'arrivé"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <h4>Historique</h4>
                                                                    <div class="row">
                                                                        <div class="col-md-6">
                                                                            <label for="Numéro dossier">Histoire
                                                                                brève:</label>
                                                                            <input type="text" id="Réanimation"
                                                                                name="Orientaion" value="Réanimation">
                                                                        </div>

                                                                        <div class="row">

                                                                            <div class="col-md-6">
                                                                                <label for="">Examen clinique
                                                                                    détaillé:</label>
                                                                                <input type="text" id=""
                                                                                    name="date"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    for="heure d'arrivé">Hypothése:</label>
                                                                                <input type="text"
                                                                                    id="heure d'arrivé"
                                                                                    name="heure d'arrivé"
                                                                                    class="form-control" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <h4>Examin paraclinique </h4>
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <label for="Numéro dossier">Radiologie:</label>
                                                                        <input type="checkbox" id="Réanimation"
                                                                            name="Orientaion" value="Réanimation">
                                                                    </div>

                                                                    <div class="row">

                                                                        <div class="col-md-6">
                                                                            <label for="">Echographie:</label>
                                                                            <input type="checkbox" id=""
                                                                                name="date" class="form-control"
                                                                                required>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label
                                                                                for="heure d'arrivé">Biologie:</label>
                                                                            <input type="checkbox" id="heure d'arrivé"
                                                                                name="heure d'arrivé"
                                                                                class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">

                                                                        <div class="col-md-6">
                                                                            <label for="heure d'arrivé">ECG:</label>
                                                                            <input type="checkbox" id="heure d'arrivé"
                                                                                name="heure d'arrivé"
                                                                                class="form-control" required>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <label for="heure d'arrivé">Autre:</label>
                                                                            <input type="text" id="heure d'arrivé"
                                                                                name="heure d'arrivé"
                                                                                class="form-control" required>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                                <div class="form-block">
                                                                    <div class="scrollable-form">

                                                                        <h4>Conclusion et diagnostic</h4>
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    for="Numéro dossier">Diagnostic:</label>
                                                                                <input type="text" id="Réanimation"
                                                                                    name="Orientaion"
                                                                                    value="Réanimation">
                                                                            </div>

                                                                            <div class="row">

                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        for="">Conclusion:</label>
                                                                                    <input type="text"
                                                                                        id="" name="date"
                                                                                        class="form-control" required>
                                                                                </div>

                                                                            </div>
                                                                        </div>


                                                                        <div class="scrollable-form">
                                                                            <h2>Soins Urgents effectués au C.U.A.U</h2>
                                                                            <h4>Gestes Techniques</h4>
                                                                            <div class="row">
                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        for="Numéro dossier">Oxgène:</label>
                                                                                    <input type="checkbox"
                                                                                        id="Réanimation"
                                                                                        name="Orientaion"
                                                                                        value="Réanimation">
                                                                                </div>

                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label for="">Abord
                                                                                            veineux:</label>
                                                                                        <input type="checkbox"
                                                                                            id=""
                                                                                            name="date"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label for="heure d'arrivé">
                                                                                            Sonde vésitale:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Sonde
                                                                                            gastrique:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Guedel:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Ventilation:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Intubation:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Massage
                                                                                            cardiaque:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Drainage
                                                                                            pleural:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Autre:</label>
                                                                                        <input type="text"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <div class="scrollable-form">

                                                                                <h4>Perfusion</h4>
                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        for="Numéro dossier">Qualité:</label>
                                                                                    <input type="checkbox"
                                                                                        id="Réanimation"
                                                                                        name="Orientaion"
                                                                                        value="Réanimation">
                                                                                </div>

                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="">Quantité:</label>
                                                                                        <input type="text"
                                                                                            id=""
                                                                                            name="date"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    >

                                                                                </div>
                                                                            </div>

                                                                            <div class="scrollable-form">

                                                                                <h4>Medication administrés</h4>
                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        for="Numéro dossier">Anticonsulsivant
                                                                                        et sedatif:</label>
                                                                                    <input type="checkbox"
                                                                                        id="Réanimation"
                                                                                        name="Orientaion"
                                                                                        value="Réanimation">
                                                                                </div>

                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="">Antalgique:</label>
                                                                                        <input type="checkbox"
                                                                                            id=""
                                                                                            name="date"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Antipyrétique:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Anti-inflammatoires:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Antipaludéens:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="">Antibiotiques:</label>
                                                                                        <input type="checkbox"
                                                                                            id=""
                                                                                            name="date"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Antibiotiques:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="">Bronchodilatateurs
                                                                                            IV:</label>
                                                                                        <input type="checkbox"
                                                                                            id=""
                                                                                            name="date"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Corticoïdes:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="">Ventoline_spray:</label>
                                                                                        <input type="checkbox"
                                                                                            id=""
                                                                                            name="date"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Diurétiques:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="">Antiémétiques:</label>
                                                                                        <input type="checkbox"
                                                                                            id=""
                                                                                            name="date"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="heure d'arrivé">Antiémétiques:</label>
                                                                                        <input type="checkbox"
                                                                                            id="heure d'arrivé"
                                                                                            name="heure d'arrivé"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="row">

                                                                                    <div class="col-md-6">
                                                                                        <label
                                                                                            for="">Autre_médicament_et_antiparasitaire:
                                                                                            :</label>
                                                                                        <input type="text"
                                                                                            id=""
                                                                                            name="text"
                                                                                            class="form-control"
                                                                                            required>
                                                                                    </div>
                                                                                </div>
                                                                            </div>


                                                                            <h4>Acte Chirurgical</h4>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    for="Numéro dossier">Décision_par:</label>
                                                                                <input type="checkbox"
                                                                                    id="Réanimation" name="Orientaion"
                                                                                    value="Réanimation">
                                                                            </div>

                                                                            <div class="row">

                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        for="">Heure:</label>
                                                                                    <input type="text"
                                                                                        id="" name="date"
                                                                                        class="form-control" required>
                                                                                </div>
                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        for="heure d'arrivé">Bloc_opératoire:</label>
                                                                                    <input type="text"
                                                                                        id="heure d'arrivé"
                                                                                        name="heure d'arrivé"
                                                                                        class="form-control" required>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row">

                                                                                <div class="col-md-6">
                                                                                    <label
                                                                                        for="heure d'arrivé">Type_intervention:</label>
                                                                                    <input type="text"
                                                                                        id="heure d'arrivé"
                                                                                        name="heure d'arrivé"
                                                                                        class="form-control" required>
                                                                                </div>


                                                                            </div>


                                                                            <input type="submit" value="Submit"
                                                                                class="btn btn-primary mt-4">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</body>

</html>
