<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <header>
      <img src="Users\meleloz-logo.png" alt="Logo de ton entreprise" class="logo">
      
       <div class="blinking-element">
          
          <div class="scrolling-text-container">
              <div class="scrolling-text">
                <h3>CENTRE NATIONAL HOSPITALIER UNIVERSITAIRE - HUBERT KOUTOUKOU MAGA</h3>
              </div>
          </div
       </div>
      <nav>
        <ul>
          <li>
          <Button><a href="menu.html">Accueil</a></Button>
          </li>
          <li>
           <Button> <a href="co">Consultation</a></Button>
          </li>
          <li>
          <Button><a href="#">À Propos</a></Button>
          </li>
          <li>
          <Button><a href="#">Contact</a></Button>
          </li>
        </ul>
      </nav>
    </header>

    <title>Ajouter un Patient</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            text-align: center;
        }
        label {
            display: block;
            margin: 15px 0 5px;
        }
        input[type="text"], input[type="date"], input[type="tel"], select {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            display: block;
            width: 100%;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
        }
        button:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
  
    <div class="container">
        <h1>Ajouter un Patient</h1>
        <form>
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


            <label for="date_naissance">Date de naissance</label>
            <input type="date" id="date_naissance" name="date_naissance" required>

            <label for="sexe">Sexe</label>
            <select id="sexe" name="sexe" required>
                <option value="">Sélectionner...</option>
                <option value="homme">Homme</option>
                <option value="femme">Femme</option>
                <option value="autre">Autre</option>
            </select>

            <label for="telephone">Numéro de téléphone</label>
            <input type="tel" id="telephone" name="telephone" required>

            <label for="telephone">Motifs d'entré</label>
            <input type="tel" id="Motifs d'entré" name="Motifs d'entré" required>

            
            <label for="nom">Personne à contacter</label>
            <input type="text" id="Personne à contacter" name="Personne à contacter" required>

            <label for="telephone">Maladie naturelle</label>
            <input type="tel" id="maladie naturelle" name="maladie naturelle" required>

            <label for="telephone">Moyen de transport</label>
            <input type="tel" id="moyen de transport" name="moyen de transport" required>

            <label for="date_naissance">Date d'entrée</label>
            <input type="date" id="date_naissance" name="date_naissance" required>

            <label for="telephone">Accompagné de</label>
            <input type="tel" id="Accompagné de" name="Accompagné de" required>


            <button type="submit">Ajouter le Patient</button>
        </form>
    </div>
</body>
<footer>
  <p>© 2024 Ma Société. Tous droits réservés.</p>
</footer>
</html>
