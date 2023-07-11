<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($error)) { ?>
        <div class="alert alert-dismissible alert-warning">
            <p class="text-danger font-weight-semibold mb-0"> <?php echo $error; ?> </p>
        </div>
    <?php } ?>
    <div class="col-xl-12 grid-margin" style="margin-left: 2cm;margin-top: 2cm;">
        <div class="col-xl-5 grid-margin float-left">
            <h5>Perdre du poids</h5>
            <?php for ($i = 0; $i < count($choix1); $i++) { ?>

                <div class="card stretch-card mb-3 shadow">
                    <div class="card-body d-flex flex-wrap justify-content-between">
                        <div>
                            <h4 class="font-weight-semibold mb-1 text-black"> <?php echo $choix1[$i]->variationPoids; ?> kilo </h4>
                            <h6 class="text-muted"><?php echo $choix1[$i]->duree; ?> jours</h6>
                        </div>
                        <h3 class="text-success font-weight-bold"> <?php echo number_format($choix1[$i]->prixUnitaire, 0, ".", " "); ?> AR</h3>

                        <span style="float: right;">
                            <a href="<?php echo base_url('Objectif/ajouter_objectif?idregime=') . $choix1[$i]->idregime ?>">
                                <button type="button" class="btn btn-warning btn-large"><i class="mdi mdi-plus-circle"></i> Choisir </button>
                            </a>
                        </span>
                    </div>

                </div>
            <?php } ?>


        </div>
        <div class="col-xl-5 grid-margin float-left">
            <h5>Gagner du poids</h5>
            <?php for ($i = 0; $i < count($choix2); $i++) { ?>
                <div class="card stretch-card mb-3">
                    <div class="card-body d-flex flex-wrap justify-content-between shadow">
                        <div>
                            <h4 class="font-weight-semibold mb-1 text-black"> <?php echo $choix2[$i]->variationPoids; ?> kilo </h4>
                            <h6 class="text-muted"><?php echo $choix2[$i]->duree; ?> jours</h6>
                        </div>
                        <h3 class="text-success font-weight-bold"> <?php echo number_format($choix2[$i]->prixUnitaire, 0, ".", " "); ?> AR</h3>
                        <span style="float: right;">
                            <a href="<?php echo base_url('Objectif/ajouter_objectif?idregime=') . $choix2[$i]->idregime ?>">
                                <button type="button" class="btn btn-warning btn-large"><i class="mdi mdi-plus-circle"></i> Choisir </button>
                            </a>
                        </span>
                    </div>
                </div>
            <?php } ?>

        </div>
    </div>
</body>

</html>