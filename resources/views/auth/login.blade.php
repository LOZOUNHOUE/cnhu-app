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
    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::before {
        background-color: black;
        border-color: black;
    }
    .custom-checkbox .custom-control-input:checked ~ .custom-control-label::after {
        color: white;
    }

  </style>
  <body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="row w-100 m-0">
                <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg" style="background-color: white;">
                    <div class="card col-lg-4 mx-auto" style="background-color: white;">
                        <div class="card-body px-5 py-5">
                            <h3 class="card-title text-left mb-3" style="color: rgb(116, 113, 113);">CONNEXION</h3>

                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label>Email *</label>
                                    <input type="email" placeholder="exemple@email.com" name="email" class="form-control p_input" required autofocus autocomplete="username">
                                    @error('email')
                                        <div class="d-block text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label>Mot de passe *</label>
                                    <input type="password" placeholder="password" name="password" class="form-control p_input" required>
                                    @error('password')
                                        <div class="d-block text-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group d-flex align-items-center justify-content-between">
                                    <div class="form-check custom-checkbox">
                                        <input type="checkbox" name="remember" class="form-check-input custom-control-input">
                                        <label class="form-check-label custom-control-label">se souvenir de moi</label>
                                    </div>
                                    <a href="{{ route('password.request') }}" class="forgot-pass">Mot de passe oublié</a>
                                </div>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-primary btn-block enter-btn">CONNEXION</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../../dashboard/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="../../dashboard1/assets/js/off-canvas.js"></script>
    <script src="../../dashboard1/assets/js/hoverable-collapse.js"></script>
    <script src="../../dashboard1/assets/js/misc.js"></script>
    <script src="../../dashboard1/assets/js/settings.js"></script>
    <script src="../../dashboard1/assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>
