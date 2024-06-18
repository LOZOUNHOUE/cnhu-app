<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page d'Inscription</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
    }

    .container {
      width: 300px;
      margin: 100px auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #fff;
    }

    h2 {
      text-align: center;
    }

    .form-group {
      margin-bottom: 15px;
    }

    label {
      display: block;
      margin-bottom: 5px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 3px;
    }

    button {
      display: block;
      width: 100%;
      padding: 10px;
      margin-top: 10px;
      border: none;
      border-radius: 3px;
      background-color: #007bff;
      color: #fff;
      cursor: pointer;
    }

    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Inscription</h2>
    <form id="signup-form">
      <div class="form-group">
        <label for="name">Nom :</label>
        <input type="text" id="name" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
      </div>
      <button type="submit">S'inscrire</button>
      <button type="button" class="button-create" onclick="location.href='user.blade.php'">connexion</button>
    </form>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      document.getElementById('signup-form').addEventListener('submit', function(event) {
        event.preventDefault();
        var name = document.getElementById('name').value;
        var email = document.getElementById('email').value;
        var password = document.getElementById('password').value;
        // Ajoutez ici la logique pour la validation des données d'inscription
        console.log('Nom:', name);
        console.log('Email:', email);
        console.log('Mot de passe:', password);
        // Redirection vers la page de connexion après l'inscription réussie
        // Remplacez la valeur de l'URL par l'URL réelle de votre page de connexion
        window.location.href = '/connexion';
      });
    });
  </script>
</body>
</html>
