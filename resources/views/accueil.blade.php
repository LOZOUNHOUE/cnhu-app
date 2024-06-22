<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background-color: #f9f9f9;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        header {
            background-color: #007bff;
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }

        header .nav-button {
            margin: 5px;
            padding: 10px 15px;
            background-color: #28a745;
            border: none;
            color: white;
            border-radius: 4px;
            cursor: pointer;
        }

        header .nav-button:hover {
            background-color: #218838;
        }

        footer {
            background-color: #dc3545;
            color: white;
            padding: 10px;
            text-align: center;
            position: absolute;
            width: 100%;
            bottom: 0;
        }

        .container {
            flex: 1;
            margin: 20px;
        }

        .content {
            display: none;
        }

        .active {
            display: block;
        }
    </style>
</head>
<body>
    <header>
        <button class="nav-button" onclick="showSection('home')">Accueil</button>
        <button class="nav-button" onclick="showSection('patients')">Gestion des Patients</button>
        <button class="nav-button" onclick="showSection('logout')">Déconnexion</button>
    </header>
    
    <div class="container">
        <div id="home" class="content active">
            <h1>Bienvenue sur la page d'accueil</h1>
            <p>Utilisez les boutons ci-dessus pour naviguer.</p>
        </div>

        <div id="patients" class="content">
            <!-- Contenu de gestion des patients -->
            <form id="searchForm">
                <input type="text" id="searchInput" placeholder="Rechercher un patient par nom">
                <button type="submit">Rechercher</button>
            </form>
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

        <div id="logout" class="content">
            <h1>Déconnexion</h1>
            <p>Vous avez été déconnecté avec succès.</p>
            <a href="#" onclick="showSection('home')">Retour à l'accueil</a>
        </div>
    </div>

    <footer>
        <p>© 2024 Gestion des Patients</p>
    </footer>

    <script>
        // Exemple de patients
        const patients = [
            { id: 1, name: 'Jean Dupont', age: 45, gender: 'M' },
            { id: 2, name: 'Marie Curie', age: 37, gender: 'F' },
            // Ajoutez d'autres patients ici
        ];

        // Affichage des patients dans le tableau
        document.addEventListener('DOMContentLoaded', () => {
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

        function showSection(sectionId) {
            const sections = document.querySelectorAll('.content');
            sections.forEach(section => {
                section.classList.remove('active');
            });
            document.getElementById(sectionId).classList.add('active');
        }

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
    </script>
</body>
</html>
