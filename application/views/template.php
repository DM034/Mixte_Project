<!DOCTYPE html>

<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Regime</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/css/vendor.bundle.base.css'); ?>">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/jquery-bar-rating/css-stars.css'); ?>" />
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendors/font-awesome/css/font-awesome.min.css'); ?>" />
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="<?php echo base_url('/assets/css/demo_1/style.css'); ?>" />
  <!-- End layout styles -->
  <link rel="shortcut icon" href="<?php echo base_url('/assets/images/favicon.png '); ?>" />
</head>

<body>
  <div class="container-scroller">

    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-profile border-bottom">
          <a href="#" class="nav-link flex-column">
            <div class="nav-profile-image">
              <img src="<?php echo base_url('/assets/images/faces/face1.jpg'); ?>" alt="profile" />
              <!--change to offline or busy as needed-->
            </div>
            <div class="nav-profile-text d-flex ml-0 mb-3 flex-column">
              <span class="font-weight-semibold mb-1 mt-2 text-center">
                <?php echo ($client[0]->nom . ' ' . $client[0]->prenom);
                ?></span>
              <span class="text-secondary icon-sm text-center"><?php echo number_format($monnaie,0,"."," ");?> AR</span>
            </div>
          </a>
        </li>
        <li class="nav-item pt-3">
          <!-- <a class="nav-link d-block" href="<?php echo base_url('index.html'); ?>">
            <img class="sidebar-brand-logo" src="<?php echo base_url('/assets/images/logo.svg'); ?>" alt="" />
            <img class="sidebar-brand-logomini" src="<?php echo base_url('/assets/images/logo-mini.svg'); ?>" alt="" />
            <div class="small font-weight-light pt-1">Responsive Dashboard</div>
          </a>
          <form class="d-flex align-items-center" action="#">
            <div class="input-group">
              <div class="input-group-prepend">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control border-0" placeholder="Search" />
            </div>
          </form> -->
        </li>
        <li class="pt-2 pb-1">
          <span class="nav-item-head">Menu</span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Accueil/accueil'); ?>">
            <i class="mdi mdi-home-circle menu-icon"></i>
            <span class="menu-title">Accueil</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Accueil/choix'); ?>">
            <i class="mdi mdi-table-large menu-icon"></i>
            <span class="menu-title">Choix</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('RegimeController/get_repas'); ?>">
            <i class="mdi mdi-food menu-icon"></i>
            <span class="menu-title">Suggestion</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Objectif/objectif'); ?>">
            <i class="mdi mdi-marker-check menu-icon"></i>
            <span class="menu-title">Mon Objectif</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Accueil/code'); ?>">
            <i class="mdi mdi-barcode menu-icon"></i>
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
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item nav-logout d-none d-md-block">
            <h2 style="margin-right: 15cm;">Regime</h2>
          </li>
          <li class="nav-item nav-logout d-none d-md-block mr-3">
            <a class="nav-link text-danger font-weight-bold" href="<?php echo base_url('AdminController/deconnexion'); ?>">Log out</a>
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
<script src="<?php echo base_url('/assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="<?php echo base_url('/assets/vendors/jquery-bar-rating/jquery.barrating.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendors/chart.js/Chart.min.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendors/flot/jquery.flot.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendors/flot/jquery.flot.resize.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendors/flot/jquery.flot.categories.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendors/flot/jquery.flot.fillbetween.js'); ?>"></script>
<script src="<?php echo base_url('/assets/vendors/flot/jquery.flot.stack.js'); ?>"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="<?php echo base_url('/assets/js/off-canvas.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/hoverable-collapse.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/misc.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/settings.js'); ?>"></script>
<script src="<?php echo base_url('/assets/js/todolist.js'); ?>"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="<?php echo base_url('/assets/js/dashboard.js'); ?>"></script>
<!-- End custom js for this page -->



</body>

</html>