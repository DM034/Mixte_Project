<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Title Page-->
    <title>Inscription</title>

    <!-- Icons font CSS-->
    <link href="<?php echo base_url('assets/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>" rel="stylesheet" media="all">
    <!-- Font special for pages-->

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('assets/vendor/select2/select2.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('assets/vendor/datepicker/daterangepicker.css'); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('assets/css/main.css'); ?>" rel="stylesheet" media="all">
    <style>
        .hidden {
            display: none;
        }
    </style>
    <script>
        function showNextStep() {
            var currentStep = document.getElementById("step1");
            var nextStep = document.getElementById("step2");

            currentStep.classList.add("hidden");
            nextStep.classList.remove("hidden");
        }

        function showLastStep() {
            var currentStep = document.getElementById("step2");
            var nextStep = document.getElementById("step1");

            currentStep.classList.add("hidden");
            nextStep.classList.remove("hidden");
        }
    </script>
</head>

<body>
    <div class="page-wrapper bg-gra-02 p-t-130 p-b-100 font-poppins">

        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h2 class="title">Inscription</h2>
                    <form method="POST" action="<?php echo base_url('ClientController/inscrire') ?>">

                        <?php if (isset($error)) { ?>
                            <div class="alert alert-dismissible alert-warning">
                                <p class="text-danger font-weight-semibold mb-0"> <?php echo $error; ?> </p>
                            </div>
                        <?php } ?>
                        <p></p>
                        <div id="step1">

                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Nom</label>
                                        <input class="input--style-4" type="text" name="nom">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Prenom</label>
                                        <input class="input--style-4" type="text" name="prenom">
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Email</label>
                                        <input class="input--style-4" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Mot de passe</label>
                                        <input class="input--style-4" type="password" name="pass">
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn--radius-2 btn--blue" onclick="showNextStep()" type="button" >Suivant</button>

                        </div>
                        <div id="step2" class="hidden">
                            <h2>Étape 2 : Informations physiques</h2>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Date de naissance</label>
                                        <div class="input-group-icon">
                                            <input class="input--style-4 js-datepicker" type="text" name="dtn">
                                            <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Genre</label>
                                        <div class="p-t-10">
                                            <label class="radio-container m-r-45">Homme
                                                <input type="radio" checked="checked" name="genre" value="1">
                                                <span class="checkmark"></span>
                                            </label>
                                            <label class="radio-container">Femme
                                                <input type="radio" name="genre" value="2">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-space">
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Taille (en cm)</label>
                                        <input class="input--style-4" type="number" name="taille">
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="input-group">
                                        <label class="label">Poids (en kg)</label>
                                        <input class="input--style-4" type="number" name="poids">
                                    </div>
                                </div>
                            </div>
                            <div class="p-t-15">
                                <button class="btn btn--radius-2 btn--blue" type="submit">Valider</button>
                                <button class="btn btn--radius-2 btn--blue" onclick="showLastStep()" type="button">Precedent</button>

                            </div>
                        </div>

                        <div class="p-t-15">
                            <a href="<?php echo base_url('Welcome/login_client') ?>">
                                <p class="btn btn--radius-2 btn--blue">Se connecter</p>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="<?php echo base_url('assets/vendor/jquery/jquery.min.js'); ?>"></script>
    <!-- Vendor JS-->
    <script src="<?php echo base_url('assets/vendor/select2/select2.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datepicker/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendor/datepicker/daterangepicker.js'); ?>"></script>

    <!-- Main JS-->
    <script src="<?php echo base_url('assets/js/global.js'); ?>"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->