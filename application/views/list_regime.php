<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4 class="card-title" style="margin-left: 5cm;margin-top: 1cm;">Liste des regimes</h4>
    <div class="table-responsive w-75" style="margin-left: 5cm;margin-top: 1cm;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Regime</th>

                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < count($allRegime); $i++) { ?>

                    <tr>
                        <td><?php echo $allRegime[$i]->nom ?></td>
                        <td>
                            <a href="<?php echo base_url('ControllerAdmin/detailRegime/' . $allRegime[$i]->idregime); ?>">
                                <button type="button" class="btn btn-warning mb-2"> Detail </button>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo base_url('ControllerAdmin/formModifRegime/' . $allRegime[$i]->idregime); ?>">
                                <button type="button" class="btn btn-primary mb-2"> Modifier </button>
                            </a>
                        </td>
                        <td>
                            <a href="<?php echo base_url('ControllerAdmin/validerSupprimerRegime/'.$allRegime[$i]->idregime); ?>">
                                <button type="button" class="btn btn-danger mb-2"> Supprimer </button>
                            </a>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

</body>

</html>