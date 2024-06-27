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
    <!-- Layout styles -->
    <link rel="stylesheet" href="../../dashboard1/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="../../dashboard1/assets/images/favicon.png" />
</head>

<body style="background-color: #f4f5f7;">

    @include('layouts.sidebar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:../../partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
            <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                <a class="navbar-brand brand-logo" href="../../index.html">
                    <img src="../../assets/images/logo.png" alt="logo" />
                </a>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card" style="background-color: white;">
                    <div class="card-body">
                        <h4 class="card-title">Liste du personnel</h4>
                        <!-- Formulaire de recherche -->
                        <form id="searchForm" class="d-flex justify-content-between align-items-center">
                            <div class="d-flex">
                                <input type="text" id="searchInput" class="form-control mr-2" placeholder="Rechercher un patient par nom">
                                <button type="submit" class="btn btn-primary mr-2">Rechercher</button>
                            </div>
                            <a href="/patient/create" class="btn btn-success">Ajouter</a>
                        </form><br>

                        <p class="card-description"><code>Personnels</code></p>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prenom</th>
                                        <th>Rôle</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../assets/images/faces/face1.jpg" alt="image" />
                                        </td>
                                        <td>Herman Beck</td>
                                        <td>Médecin</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Voir plus</button>
                                            <button type="button" class="btn btn-warning">Modifier</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../assets/images/faces/face2.jpg" alt="image" />
                                        </td>
                                        <td>Messiah Horn</td>
                                        <td>Infirmier</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Voir plus</button>
                                            <button type="button" class="btn btn-warning">Modifier</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-1">
                                            <img src="../../assets/images/faces/face3.jpg" alt="image" />
                                        </td>
                                        <td>Elijah West</td>
                                        <td>Administrateur</td>
                                        <td>
                                            <button type="button" class="btn btn-success">Voir plus</button>
                                            <button type="button" class="btn btn-warning">Modifier</button>
                                        </td>
                                    </tr>
                                    <!-- Ajoutez d'autres lignes de tableau ici selon vos besoins -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>

    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
        </div>
    </footer>
    <!-- partial -->

    <!-- plugins:js -->
    <script src="../../dashboard1/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../../dashboard1/assets/js/off-canvas.js"></script>
    <script src="../../dashboard1/assets/js/hoverable-collapse.js"></script>
    <script src="../../dashboard1/assets/js/misc.js"></script>
    <script src="../../dashboard1/assets/js/settings.js"></script>
    <script src="../../dashboard1/assets/js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>
