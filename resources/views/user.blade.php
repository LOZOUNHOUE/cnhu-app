<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            display: flex;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            max-width: 800px;
            width: 100%;
        }
        .form-container {
            flex: 1;
            padding-right: 20px;
        }
        .form-container h1 {
            margin-bottom: 20px;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .button-container {
            display: flex;
            gap: 10px;
            margin: 10px 0;
        }
        button {
            flex: 1;
            padding: 10px;
            background: #007BFF;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        button:hover {
            background: #0056b3;
        }
        .button-cancel {
            background: #6c757d;
        }
        .button-cancel:hover {
            background: #5a6268;
        }
        .button-create {
            width: 100%;
            background: #28a745;
        }
        .button-create:hover {
            background: #0ab4df;
        }
        .image-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .image-container img {
            max-width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Connexion</h1>
            <form>
                <label for="identifiant">Identifiant</label>
                <input type="text" id="identifiant" name="identifiant" required>

                <label for="motdepasse">Mot de passe</label>
                <input type="password" id="motdepasse" name="motdepasse" required>

                <div class="button-container">
                    <button type="submit">Connexion</button>
                    <button type="button" class="button-cancel" onclick="location.href='annuler.html'">Annuler</button>
                </div>
                <button type="button" class="button-create" onclick="location.href='créer.blade.php'">Créer un compte</button>
            </form>
        </div>
        
    </div>
</body>
</html>
