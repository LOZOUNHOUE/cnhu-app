<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Patients</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f9f9f9;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        header .logout-button {
            position: absolute;
            right: 20px;
            top: 20px;
            padding: 10px 15px;
            background-color: #dc3545;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        header .logout-button:hover {
            background-color: #c9302c;
        }

        footer {
            background-color: #dc3545;
            color: white;
            padding: 10px;
            text-align: center;
            position: fixed;
            width: 100%;
            bottom: 0;
        }

        .container {
            margin: 20px;
            padding-bottom: 60px; /* Space for the footer */
        }

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            text-align: center;
            margin-bottom: 20px;
        }

        input[type="text"] {
            width: 300px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            margin-right: 10px;
        }

        button {
            padding: 10px 15px;
            background-color: #5cb85c;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4cae4c;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
            color: #333;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        tr:hover {
            background-color: #f1f1f1;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fff;
            margin: 5% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 50%;
            border-radius: 10px;
        }

        .close-button {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close-button:hover,
        .close-button:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .actions button {
            background-color: #0275d8;
            margin-right: 5px;
        }

        .actions button:hover {
            background-color: #025aa5;
        }

        .actions .delete-button {
            background-color: #d9534f;
        }

        .actions .delete-button:hover {
            background-color: #c9302c;
        }
    </style>
</head>
<body>
    <header>
        <h1>Gestion des Patients</h1>
        <button class="logout-button" onclick="logout()">Déconnexion</button>
    </header>
    
    <div class="container">
        <!-- Formulaire de recherche -->
        <form id="searchForm">
            <input type="text" id="searchInput" placeholder="Rechercher un patient par nom">
            <button type="submit">Rechercher</button>
        </form>

        <!-- Tableau récapitulatif des patients -->
        <table id="patientsTable">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Âge</th>
                    <th>Sexe</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <!-- Les lignes des patients seront ajoutées ici par JavaScript -->
            </tbody>
        </table>

        <!-- Détails du patient -->
        <div id="patientDetails" class="modal">
            <div class="modal-content">
                <span class="close-button" onclick="closeModal()">&times;</span>
                <h2>Détails du Patient</h2>
                <div id="detailsContent">
                    <!-- Les détails du patient seront affichés ici -->
                </div>
            </div>
        </div>
    </div>

    <footer>
        <p>© 2024 Gestion des Patients</p>
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            // Exemple de patients
            const patients = [
                { id: 1, name: 'Jean Dupont', age: 45, gender: 'M' },
                { id: 2, name: 'Marie Curie', age: 37, gender: 'F' },
                // Ajoutez d'autres patients ici
            ];

            // Affichage des patients dans le tableau
            const patientsTableBody = document.querySelector('#patientsTable tbody');
            patients.forEach(patient => {
                const row = document.createElement('tr');
                row.innerHTML = `
                    <td>${patient.name}</td>
                    <td>${patient.age}</td>
                    <td>${patient.gender}</td>
                    <td class="actions">
                        <button onclick="viewPatient(${patient.id})">Voir</button>
                        <button onclick="editPatient(${patient.id})">Modifier</button>
                        <button class="delete-button" onclick="deletePatient(${patient.id})">Supprimer</button>
                    </td>
                `;
                patientsTableBody.appendChild(row);
            });

            // Recherche de patients
            const searchForm = document.getElementById('searchForm');
            searchForm.addEventListener('submit', (event) => {
                event.preventDefault();
                const searchTerm = document.getElementById('searchInput').value.toLowerCase();
                const filteredPatients = patients.filter(patient => patient.name.toLowerCase().includes(searchTerm));
                patientsTableBody.innerHTML = '';
                filteredPatients.forEach(patient => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${patient.name}</td>
                        <td>${patient.age}</td>
                        <td>${patient.gender}</td>
                        <td class="actions">
                            <button onclick="viewPatient(${patient.id})">Voir</button>
                            <button onclick="editPatient(${patient.id})">Modifier</button>
                            <button class="delete-button" onclick="deletePatient(${patient.id})">Supprimer</button>
                        </td>
                    `;
                    patientsTableBody.appendChild(row);
                });
            });
        });

        function viewPatient(id) {
            // Affichage des détails du patient
            const patient = patients.find(patient => patient.id === id);
            const detailsContent = document.getElementById('detailsContent');
            detailsContent.innerHTML = `
                <p>Nom: ${patient.name}</p>
                <p>Âge: ${patient.age}</p>
                <p>Sexe: ${patient.gender}</p>
            `;
            const modal = document.getElementById('patientDetails');
            modal.style.display = 'block';
        }

        function closeModal() {
            const modal = document.getElementById('patientDetails');
            modal.style.display = 'none';
        }

        function editPatient(id) {
            // Logique pour modifier le patient
            alert('Modification du patient ' + id);
        }

        function deletePatient(id) {
            // Logique pour supprimer le patient
            alert('Suppression du patient ' + id);
        }

        function logout() {
            window.location.href = 'logout.html';
        }
    </script>
</body>
</html>
