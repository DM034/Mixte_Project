<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Plus Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/mdi/css/materialdesignicons.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/flag-icon-css/css/flag-icon.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/css/vendor.bundle.base.css');?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/jquery-bar-rating/css-stars.css');?>"/>
    <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/font-awesome/css/font-awesome.min.css');?>"/>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/demo_1/style.css');?>"/>
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url('/assets/images/favicon.png ');?>"/>
  </head>
  <body>
    <div class="container-scroller">
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
            <a href="#" class="nav-link flex-column">
            <div class="nav-profile-image">
                <img src="<?php echo base_url('/assets/images/faces/face1.jpg');?>" alt="profile" />
                <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
                <span class="font-weight-semibold mb-1 mt-2 text-center">Antonio Olson</span>
                <span class="text-secondary icon-sm text-center">$3499.00</span>
            </div>
            </a>
        </li>
        <li class="nav-item pt-3">
            <a class="nav-link d-block" href="<?php echo base_url('index.html');?>">
            <img class="sidebar-brand-logo" src="<?php echo base_url('/assets/images/logo.svg');?>" alt="" />
            <img class="sidebar-brand-logomini" src="<?php echo base_url('/assets/images/logo-mini.svg');?>" alt="" />
            <div class="small font-weight-light pt-1">Responsive Dashboard</div>
            </a>
            <form class="d-flex align-items-center" action="#">
            <div class="input-group">
                <div class="input-group-prepend">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
                </div>
                <input type="text" class="form-control border-0" placeholder="Search" />
            </div>
            </form>
        </li>
        <li class="pt-2 pb-1">
            <span class="nav-item-head">Menu</span>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Accueil/accueil');?>">
                <i class="mdi mdi-home-circle menu-icon"></i>
                <span class="menu-title">Accueil</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Accueil/choix');?>">
            <i class="mdi mdi-table-large menu-icon"></i>
            <span class="menu-title">Choix</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Accueil/suggestion');?>">
            <i class="mdi mdi-table-large menu-icon"></i>
            <span class="menu-title">Suggestion</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://bootstrapdash.com/demo/plus-free/documentation/documentation.html" target="_blank">
            <i class="mdi mdi-file-document-box menu-icon"></i>
            <span class="menu-title">Mon Objectif</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Accueil/code');?>">
            <i class="mdi mdi-contacts menu-icon"></i>
            <span class="menu-title">Acheter code</span>
            </a>
        </li>
        </ul>
    </nav>


    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-chevron-double-left"></span>
          </button>
          <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="<?php echo base_url('/assets/images/logo-mini.svg');?>" alt="logo"></a>
          </div>
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <i class="mdi mdi-email-outline"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <h6 class="p-3 mb-0 font-weight-semibold">Messages</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url('/assets/images/faces/face1.jpg');?>" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                    <p class="text-gray mb-0"> 1 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url('/assets/images/faces/face6.jpg');?>" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                    <p class="text-gray mb-0"> 15 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <img src="<?php echo base_url('/assets/images/faces/face7.jpg');?>" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                    <p class="text-gray mb-0"> 18 Minutes ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 mb-0 text-center text-primary font-13">4 new messages</h6>
              </div>
            </li>
            <li class="nav-item dropdown ml-3">
              <a class="nav-link" id="notificationDropdown" href="#" data-toggle="dropdown">
                <i class="mdi mdi-bell-outline"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-left navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <h6 class="px-3 py-3 font-weight-semibold mb-0">Notifications</h6>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-calendar"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-0">New order recieved</h6>
                    <p class="text-gray ellipsis mb-0"> 45 sec ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-0">Server limit reached</h6>
                    <p class="text-gray ellipsis mb-0"> 55 sec ago </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-link-variant"></i>
                    </div>
                  </div>
                  <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                    <h6 class="preview-subject font-weight-normal mb-0">Kevin karvelle</h6>
                    <p class="text-gray ellipsis mb-0"> 11:09 PM </p>
                  </div>
                </a>
                <div class="dropdown-divider"></div>
                <h6 class="p-3 font-13 mb-0 text-primary text-center">View all notifications</h6>
              </div>
            </li>
          </ul>

          <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item nav-logout d-none d-md-block">
                  <button class="btn btn-sm btn-danger">Trailing</button>
            </li>
            <li class="nav-item nav-profile dropdown d-none d-md-block">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                  <div class="nav-profile-text">English </div>
                </a>
                <div class="dropdown-menu center navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="#">
                  <i class="flag-icon flag-icon-bl mr-3"></i> French </a>
                  <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-cn mr-3"></i> Chinese </a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                  <i class="flag-icon flag-icon-de mr-3"></i> German </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">
                    <i class="flag-icon flag-icon-ru mr-3"></i>Russian </a>
                </div>
            </li>
            <li class="nav-item nav-logout d-none d-lg-block">
                <a class="nav-link" href="index.html">
                    <i class="mdi mdi-home-circle"></i>
                </a>
            </li>
            <li class="nav-item nav-logout d-none d-md-block mr-3">
              <a class="nav-link" href="#">Log out</a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <div class="main-panel">

      <?php
          $this->load->view($content);
        ?>
      </div>
    </div>
</body>
<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
  </div>

  <div>
    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block"> Distributed By: <a href="https://themewagon.com/" target="_blank">Themewagon</a></span>
  </div>
</footer>



      <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url('/assets/vendors/js/vendor.bundle.base.js');?>"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url('/assets/vendors/jquery-bar-rating/jquery.barrating.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/vendors/chart.js/Chart.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/vendors/flot/jquery.flot.js');?>"></script>
    <script src="<?php echo base_url('/assets/vendors/flot/jquery.flot.resize.js');?>"></script>
    <script src="<?php echo base_url('/assets/vendors/flot/jquery.flot.categories.js');?>"></script>
    <script src="<?php echo base_url('/assets/vendors/flot/jquery.flot.fillbetween.js');?>"></script>
    <script src="<?php echo base_url('/assets/vendors/flot/jquery.flot.stack.js');?>"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url('/assets/js/off-canvas.js');?>"></script>
    <script src="<?php echo base_url('/assets/js/hoverable-collapse.js');?>"></script>
    <script src="<?php echo base_url('/assets/js/misc.js');?>"></script>
    <script src="<?php echo base_url('/assets/js/settings.js');?>"></script>
    <script src="<?php echo base_url('/assets/js/todolist.js');?>"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url('/assets/js/dashboard.js');?>"></script>
    <!-- End custom js for this page -->



  </body>
</html>

