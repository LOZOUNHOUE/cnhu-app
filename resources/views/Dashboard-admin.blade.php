<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Utilisateurs</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            margin-top: 50px;
        }
        .modal .form-control {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mb-4">Gestion des Utilisateurs</h1>
        <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#addUserModal">Ajouter Utilisateur</button>
        <table class="table table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody id="userTableBody">
                <!-- Example user data -->
                <tr>
                    <td>1</td>
                    <td>Jean Dupont</td>
                    <td>jean.dupont@example.com</td>
                    <td>
                        <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editUserModal">Modifier</button>
                        <button class="btn btn-danger btn-sm" onclick="deleteUser(this)">Supprimer</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal for Adding User -->
    <div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="addUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserModalLabel">Ajouter Utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="addUserName" class="form-control" placeholder="Nom">
                    <input type="email" id="addUserEmail" class="form-control" placeholder="Email">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary" onclick="addUser()">Ajouter</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal for Editing User -->
    <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editUserModalLabel">Modifier Utilisateur</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="text" id="editUserName" class="form-control" placeholder="Nom">
                    <input type="email" id="editUserEmail" class="form-control" placeholder="Email">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                    <button type="button" class="btn btn-primary" onclick="editUser()">Enregistrer</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        let users = [
            { id: 1, name: 'Jean Dupont', email: 'jean.dupont@example.com' }
        ];
        let editUserId = null;

        function renderTable() {
            const tbody = document.getElementById('userTableBody');
            tbody.innerHTML = '';
            users.forEach(user => {
                tbody.innerHTML += `
                    <tr>
                        <td>${user.id}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>
                            <button class="btn btn-warning btn-sm" data-toggle="modal" data-target="#editUserModal" onclick="showEditUserModal(${user.id})">Modifier</button>
                            <button class="btn btn-danger btn-sm" onclick="deleteUser(${user.id})">Supprimer</button>
                        </td>
                    </tr>
                `;
            });
        }

        function addUser() {
            const name = document.getElementById('addUserName').value;
            const email = document.getElementById('addUserEmail').value;
            const id = users.length ? users[users.length - 1].id + 1 : 1;
            users.push({ id, name, email });
            renderTable();
            $('#addUserModal').modal('hide');
        }

        function showEditUserModal(id) {
            editUserId = id;
            const user = users.find(user => user.id === id);
            document.getElementById('editUserName').value = user.name;
            document.getElementById('editUserEmail').value = user.email;
        }

        function editUser() {
            const name = document.getElementById('editUserName').value;
            const email = document.getElementById('editUserEmail').value;
            const user = users.find(user => user.id === editUserId);
            user.name = name;
            user.email = email;
            renderTable();
            $('#editUserModal').modal('hide');
        }

        function deleteUser(id) {
            users = users.filter(user => user.id !== id);
            renderTable();
        }

        document.addEventListener('DOMContentLoaded', renderTable);
    </script>
</body>
</html>
