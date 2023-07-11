<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="my-4 ml-4">
        <?php if ( !empty($regime)) { ?>
            <div class="col-xl-4 grid-margin">

                <?php if ($regime[0]->idobjectif == 1) { ?>
                    <h5>Perdre du poids</h5>
                <?php } else { ?>
                    <h5>Gagner du poids</h5>
                <?php } ?>
                <div class="card stretch-card mb-3">
                    <div class="card-body d-flex flex-wrap justify-content-between">
                        <div>
                            <h4 class="font-weight-semibold mb-1 text-black"><?php echo $regime[0]->variationPoids; ?> kilo </h4>
                            <h6 class="text-muted">Pendant <?php echo $regime[0]->duree; ?> jours</h6>
                        </div>
                        <h3 class="text-success font-weight-bold"><?php echo number_format($regime[0]->prixUnitaire, 0, ".", " "); ?> AR</h3>
                    </div>
                </div>
            </div>
        <?php } else { ?>
            <h5>Veuillez choisir d'abord un regime</h5>
        <?php } ?>
        <a href="<?php echo base_url('Accueil/choix'); ?>">
            <button type="button" class="btn btn-warning btn-small "><i class="mdi mdi-plus-circle"></i> Changer d'objectif </button>
        </a>
    </div>
</body>

</html>