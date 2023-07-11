<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h4 class="card-title" style="margin-left: 5cm;margin-top: 1cm;">Liste des repas</h4>
    <div class="table-responsive w-75" style="margin-left: 5cm;margin-top: 1cm;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Repas</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($allrepas as $repas) { ?>

                    <tr>
                        <td> <?php echo $repas->nomrepas ?></td>
                        <td>
                            <a href="<?php echo base_url('ControllerAdmin/detailRepas/'.$repas->idrepas); ?>">
                                <button type="button" class="btn btn-warning mb-2"> Details </button>
                            </a>

                        </td>
                        <td>
                            <a href="<?php echo base_url('ControllerAdmin/modifierRepas/' . $repas->idrepas); ?>">
                                <button type="button" class="btn btn-primary mb-2"> Modifier </button>
                            </a>
                        </td>
                        
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

</body>

</html>