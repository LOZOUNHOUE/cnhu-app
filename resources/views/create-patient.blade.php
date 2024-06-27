<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un Patient</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
        }
        .form-block {
            background: #fff;
            padding: 20px;
            margin-bottom: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        .form-block h2 {
            margin-top: 0;
        }
        .form-block input[type="text"],
        .form-block input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .form-block button {
            background: #5cb85c;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            position: absolute;
            right: 20px;
            bottom: 20px;
        }
        .form-block button:hover {
            background: #4cae4c;
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Bloc 1 : Informations personnelles -->
        <form action="/ajouter_patient" method="post">

          <div class="form-block">
          <h2>Dossier</h2>

                  <label for="Numéro dossier">Numéro dossier:</label>
                  <input type="text" id="Numéro dossier" name="Numéro dossier" required>

                  <label for="date">date:</label>
                  <input type="date" id="date" name="date" required>

                  <label for="heure d'arrivé">heure d'arrivé:</label>
                  <input type="heure d'arrivé" id="heure d'arrivé" name="heure d'arrivé" required><br> <br>

            <div class="form-block">
                <h2>Informations Personnelles Patient</h2>

                <label for="nom">Nom</label>
            <input type="text" id="nom" name="nom" required>

            <label for="nom">Prénom</label>
            <input type="text" id="prénom" name="prénom" required>

            <label for="nom">Adresse</label>
            <input type="text" id="Adresse" name="Adresse" required>

            <label for="nom">Religion</label>
            <input type="text" id="religion" name="religion" required>

            <label for="nom">Ethnie</label>
            <input type="text" id="ethnie" name="ethnie" required>

            <label for="nom">Profession</label>
            <input type="text" id="profession" name="profession" required>

            <label for="nom">Provenance</label>
            <input type="text" id="provenance" name="provenance" required>

            <label for="telephone">Téléphone:</label>
                <input type="text" id="telephone" name="telephone" pattern="\d{08}" title="Entrez un numéro de téléphone valide de 10 chiffres" required><br>

            <label for="date_naissance">Date de naissance</label>
            <input type="date" id="date_naissance" name="date_naissance" required><br><br>

            <label for="sexe">Sexe</label>
            <select id="sexe" name="sexe" required>
                <option value="">Sélectionner...</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="autre">Autre</option>
            </select><br><br>


            <label for="motif d'entré">motif d'entré</label>
            <input type="text" id="motif d'entré" name="motif d'entré" required>



            <label for="nom">Personne à contacter</label>
            <input type="text" id="Personne à contacter" name="Personne à contacter" required>

            <label for="Maladie naturelle">Maladie naturelle</label>
            <input type="text" id="Maladie naturelle" name="Maladie naturelle" required>

            <label for="Moyen de transport">Moyen de transport</label>
            <input type="text" id="Moyen de transport" name="Moyen de transport" required> <br><br>

            <label for="date_naissance">Date d'entrée</label>
            <input type="date" id="Date d'entrée" name="Date d'entrée" required><br><br>

            <label for="Accompagné de">Accompagné de</label>
            <input type="text" id="Accompagné de" name="Accompagné de" required> <br><br><br>


                <button type="submit">Enregister</button>
            </div>
        </form>

        <!-- Bloc 2 : EQUIPE  -->
        <form action="/Equipe d'accueil" method="post">
        <div class="form-block">
          <h3>Equipe d'accueil</h3>
          <label for="Chirurgien">Chirurgien:</label>
          <input type="text" id="Chirurgien" name="Chirurgien" required>

          <label for="Médécin">Médécin:</label>
          <input type="text" id="Médécin" name="Médécin" required>

          <label for="Interne">Interne:</label>
          <input type="text" id="Interne" name="Interne" required>

          <label for="Infirmier">Infirmier:</label>
          <input type="text" id="Infirmier" name="Infirmier" required>

          <label for="Aide-Soignant">Aide-Soignant:</label>
          <input type="text" id="Aide-Soignant" name="Aide-Soignant" required> <br><br><br>

          <button type="submit">Enregister</button>
      </div>
    </form>

     <!-- Bloc 3 : orientaion  -->
     <form action="/orientaion" method="post">
      <div class="form-block">
        <h3>orientaion</h3>
        <label for="Externe">Externe:</label>
        <input type="checkbox" id="Externe" name="Externe" required><br><br>

        <label for="Mise en observation">Mise en observation:</label>
        <input type="checkbox" id="Mise en observation" name="Mise en observation" required><br><br>

        <label for="Transfert">Transfert:</label>
        <input type="checkbox" id="Transfert" name="Transfert" required>ou

        <label for="Hospitalisation">Hospitalisation:</label>
        <input type="checkbox" id="Hospitalisation" name="Hospitalisation" required><br><br>

        <label for="Service">Service</label>
        <select id="Service" name="Service" required>
            <option value="">Sélectionner...</option>
            <option value="Pédiatrie">Pédiatrie</option>
            <option value="Médécine">Médécine</option>
            <option value="Chirurgie">Chirurgie</option>
            <option value="autre">Autre</option>
        </select><br><br>

        <label for="Decision de transfert par ">Decision de transfert par:</label>
        <input type="text" id="Decision de transfert par" name="Decision de transfert par" required>

        <label for="date"> Date de sortie CUAU:</label>
        <input type="date" id="date" name="date" required><br><br><br>

        <button type="submit">Enregister</button>
    </div>
  </form>

  <!-- Bloc 4 : OBSERVATION  -->
  <form action="/Observation" method="post">
    <div class="form-block">
      <h3>Observation</h3>
      <label for="Rédigé par">Rédigé par:</label>
      <input type="text" id="Rédigé par" name="Rédigé par" required>

      <label for="date">Date:</label>
      <input type="date" id="date" name="date" required><br><br>

      <label for="Lieu">Lieu:</label>
      <input type="text" id="Lieu" name="Lieu" required>

      <label for="Sous la responsabilitédu Dr">Sous la responsabilitédu Dr:</label>
      <input type="text" id="Sous la responsabilitédu Dr" name="Sous la responsabilitédu Dr" required> <br><br><br>

      <button type="submit">Enregister</button>
  </div>
</form>

        <!-- Bloc 5 : Paramètres vitaux -->
        <form action="/ajouter_patient_vitaux" method="post">
            <div class="form-block">
                <h2>Paramètres Vitaux</h2>
                <div class="form-block">
                  <h3>Neurologie</h3>
                  <label for="Conscience">Conscience:</label>
                  <input type="checkbox" id="Conscience" name="Conscience" required><br><br>

                  <label for="Motricité">Motricité:</label>
                  <input type="text" id="Motricité" name="Motricité" required>

                  <label for="Sensibilité">Sensibilité:</label>
                  <input type="text" id="Sensibilité" name="Sensibilité" required>

                  <label for="convulsion">convulsion:</label>
                  <input type="text" id="convulsion" name="convulsion" required>

                  <label for="Température">Température:</label>
                  <input type="text" id="Température" name="Température" required>
              </div>

              <div class="form-block">
                <h3>Hemodynamique</h3>

                <label for="PA">PA:</label>
                <input type="checkbox" id="PA" name="PA" required>

                <label for="Pouls">Pouls:</label>
                <input type="checkbox" id="Pouls" name="Pouls" required>

                <label for="Coloration">Coloration:</label>
                <input type="checkbox" id="Coloration" name="Coloration" required>

                <label for="Sueurs">Sueurs:</label>
                <input type="checkbox" id="Sueurs" name="Sueurs" required>

                <label for="Diurèse">Diurèse:</label>
                <input type="checkbox" id="Diurèse" name="Diurèse" required>

                <label for="Auscullation">Auscullation:</label>
                <input type="checkbox" id="Auscullation" name="Auscullation" required>

            </div>

            <div class="form-block">
              <h3>Respiration</h3>

                <label for="FR">FR:</label>
                <input type="checkbox" id="FR" name="FR" required>

                <label for="Dyspnée">Dyspnée:</label>
                <input type="checkbox" id="Dyspnée" name="Dyspnée" required>

                <label for="R.Paradoxale">R.Paradoxale:</label>
                <input type="checkbox" id="R.Paradoxale" name="R.Paradoxale" required>

                <label for="Gasp">Gasp:</label>
                <input type="checkbox" id="Gasp" name="Gasp" required>

                <label for="Apnée">Apnée:</label>
                <input type="checkbox" id="Apnée" name="Apnée" required>

                <label for="S.P.O2">S.P.O2:</label>
                <input type="checkbox" id="S.P.O2" name="S.P.O2" required>

                <label for="Cyanose">Cyanose:</label>
                <input type="checkbox" id="Cyanose" name="Cyanose" required>

                <label for="Encombrement">Encombrement:</label>
                <input type="checkbox" id="Encombrement" name="Encombrement" required>

          </div>

          <div class="form-block">
            <h3>Abdomen</h3>
            <label for="Ballonné">Ballonné:</label>
            <input type="text" id="Ballonné" name="Ballonné" required>

            <label for="Douleur">Douleur:</label>
            <input type="text" id="Douleur" name="Douleur" required>

            <label for="Cirombilic">Cirombilic:</label>
            <input type="text" id="Cirombilic" name="Cirombilic" required>

            <label for="Autre">Autre:</label>
            <input type="text" id="Autre" name="Autre" required>

            <label for="Hemorragie externe">Hemorragie externe:</label>
            <input type="checkbox" id="Hemorragie externe" name="Hemorragie externe" required>

            <label for="Fracture evidante">PoFracture evidanteuls:</label>
            <input type="checkbox" id="Fracture evidante" name="Fracture evidante" required>

            <label for="Brulure">Brulure:</label>
            <input type="checkbox" id="Brulure" name="Brulure" required>

            <label for="Plaies diverses">Plaies diverses:</label>
            <input type="checkbox" id="Plaies diverses" name="Plaies diverses" required>

            <label for="Divers">Divers:</label>
            <input type="checkbox" id="Divers" name="Divers" required>

            <label for="Dextro">Dextro:</label>
            <input type="checkbox" id="Dextro" name="Dextro" required>
        </div>

        <div class="form-block">
          <h3>Antécédent</h3>
          <label for="Antécédent médicaux">Antécédent médicaux:</label>
          <input type="text" id="Antécédent médicaux" name="Antécédent médicaux" required>

          <label for="Antécédent chirugicaux">Antécédent chirugicaux:</label>
          <input type="text" id="Antécédent chirugicaux" name="Antécédent chirugicaux" required>

      </div>

      <div class="form-block">
        <h3>Facture de risque</h3>
        <label for="Alcool">Alcool:</label>
        <input type="checkbox" id="Alcool" name="Alcool" required>

        <label for="Tabac">Tabac:</label>
        <input type="checkbox" id="Tabac" name="Tabac" required>

        <label for="Allergie">Allergie:</label>
        <input type="checkbox" id="Allergie" name="Allergie" required>

        <label for="Obésité">Obésité:</label>
        <input type="checkbox" id="Obésité" name="Obésité" required>
    </div>

    <div class="form-block">
      <h3>Histoire</h3>
      <label for="Histoire brève">Histoire brève:</label>
      <input type="text" id="Histoire brève" name="Histoire brève" required>

      <label for="Examen clinique détaillé">Examen clinique détaillé:</label>
      <input type="text" id="Examen clinique détaillé" name="Examen clinique détaillé" required>

      <label for="Hypothèse">Hypothèse:</label>
      <input type="text" id="Hypothèse" name="Hypothèse" required>
  </div>

  <div class="form-block">
    <h3>Examen paraclinique</h3>
    <label for="Radiologie">Radiologie:</label>
    <input type="checkbox" id="Radiologie" name="Radiologie" required>

    <label for="Echographie">TeEchographiension:</label>
    <input type="checkbox" id="Echographie" name="Echographie" required>

    <label for="Biologie">Biologie:</label>
    <input type="checkbox" id="Biologie" name="Biologie" required>

    <label for="ECG">ECG:</label>
    <input type="checkbox" id="ECG" name="ECG" required>

    <label for="Autre">Autre:</label>
    <input type="text" id="Autre" name="Autre" required>
</div>

<div class="form-block">
  <h3>Conclusion Diagnostic</h3>
  <label for="Diagnostic">Diagnostic:</label>
  <input type="text" id="Diagnostic" name="Diagnostic" required>

  <label for="Conclusion">Conclusion:</label>
  <input type="text" id="Conclusion" name="Conclusion" required>

</div>
<!-- Bloc 4 : soin  -->
<form action="/Observation" method="post">
  <h2>Soin urgents effectué</h2>
<div class="form-block">
  <h3>Geste technique</h3>
  <label for="Oxgène">Oxgène:</label>
  <input type="checkbox" id="Oxgène" name="teOxgènension" required>

  <label for="Abord veineux">Abord veineux:</label>
  <input type="checkbox" id="Abord veineux" name="Abord veineux" required>

  <label for="Sonde vésitale">Sonde vésitale:</label>
  <input type="checkbox" id="Sonde vésitale" name="Sonde vésitale" required>

  <label for="Sonde gastrique">Sonde gastrique:</label>
  <input type="checkbox" id="Sonde gastrique" name="Sonde gastrique" required>

  <label for="Guedel">Guedel:</label>
  <input type="checkbox" id="Guedel" name="Guedel" required>

  <label for="Ventilation">Ventilation:</label>
  <input type="checkbox" id="Ventilation" name="Ventilation" required>

  <label for="Intubation">Intubation:</label>
  <input type="checkbox" id="tensIntubationion" name="Intubation" required>

  <label for="tension">Massage cardiaque:</label>
  <input type="checkbox" id="Massage cardiaque" name="Massage cardiaque" required>

  <label for="Drainage pleural">Drainage pleural:</label>
  <input type="checkbox" id="Drainage pleural" name="Drainage pleural" required><br><br>

  <label for="Autre">Autre:</label>
  <input type="text" id="Autre" name="Autre" required>
</div>

<div class="form-block">
  <h3>perfusion</h3>
  <label for="Qualité">Qualité:</label>
  <input type="checkbox" id="Qualité" name="Qualité" required>

  <label for="Quantité">Quantité:</label>
  <input type="checkbox" id="Quantité" name="Quantité" required>

</div>

<div class="form-block">
  <h3>Médicament administré</h3>

  <label for="Anticonsulsivant et sedatif">Anticonsulsivant et sedatif:</label>
  <input type="checkbox" id="Anticonsulsivant et sedatif" name="Anticonsulsivant et sedatif" required>

  <label for="Antalgique">Antalgique:</label>
  <input type="checkbox" id="Antalgique" name="Antalgique" required>

  <label for="Antipyrétique">Antipyrétique:</label>
  <input type="checkbox" id="Antipyrétique" name="Antipyrétique" required>

  <label for="Anti-inflammatoires">Anti-inflammatoires:</label>
  <input type="checkbox" id="Anti-inflammatoires" name="Anti-inflammatoires" required>

  <label for="Antipaludéens">Antipaludéens:</label>
  <input type="checkbox" id="Antipaludéens" name="Antipaludéens" required>

  <label for="Antibiotiques">Antibiotiques:</label>
  <input type="checkbox" id="Antibiotiques" name="Antibiotiques" required>

  <label for="Cardiotoniques">Cardiotoniques:</label>
  <input type="checkbox" id="Cardiotoniques" name="Cardiotoniques" required>

  <label for="Bronchodilatateurs IV">Bronchodilatateurs IV:</label>
  <input type="checkbox" id="Bronchodilatateurs IV" name="Bronchodilatateurs IV" required>

  <label for="Corticoïdes">Corticoïdes:</label>
  <input type="checkbox" id="Corticoïdes" name="Corticoïdes" required>

  <label for="Ventoline_spray">Ventoline_spray:</label>
  <input type="checkbox" id="Ventoline_spray" name="Ventoline_spray" required>

  <label for="Diurétiques">Diurétiques:</label>
  <input type="checkbox" id="Diurétiques" name="Diurétiques" required>

  <label for="Antiémétiques">Antiémétiques:</label>
  <input type="checkbox" id="Antiémétiques" name="Antiémétiques" required>

  <label for="Antiémétiques">Antiémétiques:</label>
  <input type="checkbox" id="tension" name="tension" required><br><br>

  <label for="Autre_médicament_et_antiparasitaire">Autre_médicament_et_antiparasitaire:</label>
  <input type="text" id="Autre_médicament_et_antiparasitaire" name="Autre_médicament_et_antiparasitaire" required>
</div>

<div class="form-block">
  <h3>Actes_chirurgical</h3>

  <label for="Décision_par">Décision_par:</label>
  <input type="text" id="Décision_par" name="Décision_par" required>

  <label for="Heure">Heure:</label>
  <input type="text" id="Heure" name="Heure" required>

  <label for="Bloc_opératoire">Bloc_opératoire:</label>
  <input type="text" id="Bloc_opératoire" name="Bloc_opératoire" required>

  <label for="Type_intervention">Type_intervention:</label>
  <input type="text" id="Type_intervention" name="Type_intervention" required>

  <button type="submit">Enregistrer</button><br><br><br>
</div>
<button type="submit">Enregistrer</button><br><br><br>
</div>
</form>

                <button type="submit">Enregistrer</button><br><br><br>
            </div>
            <button type="submit">Enregistrer</button>
          </div>
        </form>
    </div>
</body>
</html>
