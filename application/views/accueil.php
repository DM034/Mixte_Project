<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Regime</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/mdi/css/materialdesignicons.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/flag-icon-css/css/flag-icon.min.css'); ?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/vendors/css/vendor.bundle.base.css'); ?>">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="<?php echo base_url('./assets/vendors/font-awesome/css/font-awesome.min.css'); ?>" />
    <link rel="stylesheet" href="<?php echo base_url('./assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css'); ?>" />
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="<?php echo base_url('./assets/css/demo_1/style.css'); ?>" />
    <!-- endinject -->
    <link rel="shortcut icon" href="<?php echo base_url('./assets/images/favicon.png'); ?>" />
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-index navbar-light border-bottom px-5">
      <a class="navbar-brand" href="#">
        <!-- <img class="logo" src="<?php echo base_url('assets/images/logo.svg'); ?>" alt="Plus Admin" /> -->
         <h1 class="title"> Regime </h1>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
    </nav>
    <div class="container">
      <div class="content-wrapper bg-white">
        <div clsss="wrapper">
          <div class="row">
            <div class="col-md-12">
              <h1 class="text-center mb-5 mt-4 font-weight-light text-uppercase text-muted"> Choisissez </h1>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 grid-margin">
              <div class="p-5 d-flex flex-column align-items-center">
                <a href="<?php echo base_url('Welcome/formLoginAdmin'); ?>" class="text-decoration-none">
                  <img src="<?php echo base_url('./assets/images/admin.png'); ?>" alt="default" class="mw-100 mb-4 shadow-lg" />
                  <h4 class="text-dark text-center">Admin</h4>
                </a>
              </div>
            </div>
            <div class="col-md-6 grid-margin">
              <div class="p-5 d-flex flex-column align-items-center">
                <a href="<?php echo base_url('Welcome/login_client'); ?>" class="text-decoration-none">
                  <img src="<?php echo base_url('./assets/images/client.png'); ?>" alt="horizontal" class="mw-100 mb-4 shadow-lg" />
                  <h4 class="text-dark text-center">Client</h4>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo base_url('assets/vendors/js/vendor.bundle.base.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/off-canvas.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/hoverable-collapse.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/misc.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/settings.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/todolist.js'); ?>"></script>
  </body>
</html>