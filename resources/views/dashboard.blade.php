<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/dashboard1/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/dashboard1/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/dashboard1/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/dashboard1/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/dashboard1/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/dashboard1/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/dashboard1/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/dashboard1/assets/images/favicon.png" />
  </head>
  <body>

        <div class="container-fluid">
            <div class="block-header">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Section de bienvenue -->


            <!-- Le reste de votre contenu -->
            <div class="row clearfix">
                <!-- Vos widgets et autres contenus ici -->
            </div>
        </div>

        <div class="container-scroller">
            <!-- partial:partials/_sidebar.html -->
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
              <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
                <a class="sidebar-brand brand-logo" href="index.html"><img src="{{ asset('logo.jpg') }}" alt="logo" /></a>
                <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
              </div>
              <ul class="nav">
                <li class="nav-item profile">
                  <div class="profile-desc">
                    <div class="profile-pic">
                      <div class="count-indicator">
                        <img class="img-xs rounded-circle " src="/dashboard1/assets/images/faces/face15.jpg" alt="">
                        <span class="count bg-success"></span>
                      </div>
                      <div class="profile-name">
                        <h5 class="mb-0 font-weight-normal">{{ Auth::user()->nom}}</h5>
                        <span>{{ Auth::user()->role}}</span>
                      </div>
                    </div>
                    <a href="#" id="profile-dropdown" data-toggle="dropdown"><i class="mdi mdi-dots-vertical"></i></a>
                    <div class="dropdown-menu dropdown-menu-right sidebar-dropdown preview-list" aria-labelledby="profile-dropdown">
                      <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-dark rounded-circle">
                            <i class="mdi mdi-settings text-primary"></i>
                          </div>
                        </div>
                        <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1 text-small">Account settings</p>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-dark rounded-circle">
                            <i class="mdi mdi-onepassword  text-info"></i>
                          </div>
                        </div>
                        <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1 text-small">Change Password</p>
                        </div>
                      </a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item preview-item">
                        <div class="preview-thumbnail">
                          <div class="preview-icon bg-dark rounded-circle">
                            <i class="mdi mdi-calendar-today text-success"></i>
                          </div>
                        </div>
                        <div class="preview-item-content">
                          <p class="preview-subject ellipsis mb-1 text-small">To-do list</p>
                        </div>
                      </a>
                    </div>
                  </div>
                </li>
                <li class="nav-item nav-category">
                  <span class="nav-link">Navigation</span>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href="/dashboard">
                    <span class="menu-icon" >
                      <i class="nav-link {{ Route::currentRouteName() == 'dashboard' ? 'active' : '' }} mdi mdi-speedometer" href="/dashboard"></i>
                    </span>
                    <span class="menu-title">Dashboard</span>
                  </a>
                </li>
                <li class="nav-item menu-items">
                  <a class="nav-link" href="/patient">
                    <span class="menu-icon">
                      <i class="nav-link {{ Route::currentRouteName() == 'patient' ? 'active' : '' }} mdi mdi-speedometer" href="/patient"></i>
                    </span>
                    <span class="menu-title">Patient</span>
                  </a>
                </li>
                <li class="nav-item menu-items">
                    <a class="nav-link {{ Route::currentRouteName() == 'personnels' ? 'active' : '' }}" href="/personnels">
                      <span class="menu-icon">
                        <i class="mdi mdi-speedometer"></i>
                      </span>
                      <span class="menu-title">Personnels</span>
                    </a>
                  </li>

              </ul>
            </nav>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper" style="display: flex; justify-content: center;align-items: center;background-image:url('dashboard.png');filter:brightness(0.9);padding:0px 10px;z-index:10">
                <div class="welcome-message">
                    <h3 style="font-size:4em;font-style:italic;" style="z-index:100;">Bienvenue, {{ auth()->user()->nom }}!</h3>
                    <p style="font-size:1.3em;">Nous sommes ravis de vous voir sur votre tableau de bord. Vous pouvez commencer à naviguer à partir des options disponibles sur la gauche.</p>
                </div>
              <!-- partial:partials/_navbar.html -->
              <nav class="navbar p-0 fixed-top d-flex flex-row">
                <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
                  <a class="navbar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
                </div>
                <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
                  <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-menu"></span>
                  </button>
                  <ul class="navbar-nav navbar-nav-right">
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                        <div class="navbar-profile">
                          <img class="img-xs rounded-circle" src="/dashboard1/assets/images/faces/face15.jpg" alt="">
                          <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->nom}}</p>
                          <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                        </div>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                        <h6 class="p-3 mb-0">Profile</h6>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                          <div class="preview-thumbnail">
                            <div class="preview-icon bg-dark rounded-circle">
                              <i class="mdi mdi-settings text-success"></i>
                            </div>
                          </div>
                          <div class="preview-item-content">
                              <form action="/logout" method="POST" class="d-inline">
                                  @csrf
                                  <button type="submit" class="btn btn-link logout-button">
                                      Se déconnecter
                                  </button>
                              </form>
                          </div>
                        </a>
                        <div class="dropdown-divider"></div>

                  </ul>

              </nav>
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>



          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
          <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
              <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="/dashboard1/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/dashboard1/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/dashboard1/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/dashboard1/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/dashboard1/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/dashboard1/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/dashboard1/assets/js/off-canvas.js"></script>
    <script src="/dashboard1/assets/js/hoverable-collapse.js"></script>
    <script src="/dashboard1/assets/js/misc.js"></script>
    <script src="/dashboard1/assets/js/settings.js"></script>
    <script src="/dashboard1/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="/dashboard1/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
