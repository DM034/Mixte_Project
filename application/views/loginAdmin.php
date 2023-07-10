<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login admin</title>
  <link rel="stylesheet" href="<?php echo base_url() ;?>assets/vendors/feather/feather.css">
  <link rel="stylesheet" href="<?php echo base_url() ;?>assets/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="<?php echo base_url() ;?>assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?php echo base_url() ;?>assets/css/vertical-layout-light/style.css">
  <!-- <link rel="shortcut icon" href="../../images/favicon.png" /> -->
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img class="logo" src="<?php echo base_url('assets/images/logo.svg'); ?>" alt="Plus Admin" />
              </div>
              <h6 class="font-weight-light">Sign in admin.</h6>
              <?php if(isset($error)){ ?>
                  <div id="error-message" style="color: red;"><?php echo $error; ?></div>
              <?php } ?>
              
              <form class="pt-3" action="<?php echo base_url('Accueil/verifLoginAdmin'); ?>" method="post">
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" placeholder="Username">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" name="pwd" id="pwd" placeholder="Password">
                  </div>
                  <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input" id="showPasswordCheckbox">
                      Voir mot de passe
                  </label>
                  <div class="mt-3">
                    <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="#">SIGN IN</button>
                  </div>
                  <div class="text-center mt-4 font-weight-light">
                      <a href="<?php echo base_url('Accueil/accueil'); ?>" class="text-primary">retour</a>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="<?php echo base_url() ;?>assets/vendors/js/vendor.bundle.base.js"></script>

  <script src="<?php echo base_url() ;?>assets/js/off-canvas.js"></script>
  <script src="<?php echo base_url() ;?>assets/js/hoverable-collapse.js"></script>
  <!-- <script src="assets/js/template.js"></script> -->
  
  <script src="<?php echo base_url() ;?>assets/js/settings.js"></script>
  <script src="<?php echo base_url() ;?>assets/js/todolist.js"></script>
  
  <script>
        const passwordField = document.getElementById("pwd");
        const showPasswordCheckbox = document.getElementById("showPasswordCheckbox");

        showPasswordCheckbox.addEventListener("change", function() {
            if (showPasswordCheckbox.checked) {
                passwordField.type = "text"; 
            } else {
                passwordField.type = "password";
            }
        });
    </script>

</body>

</html>
