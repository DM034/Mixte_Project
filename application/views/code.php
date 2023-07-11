<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Entrer le code</h4>
                <form class="form-inline" action="<?php echo base_url('ControllerFaneva/demandeAjoutCode'); ?>" method="post">
                    <label class="sr-only" for="inlineFormInputName2">Code</label>
                    <input type="text" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Code" name="numero">
                    <div class="form-check mx-sm-2">
                        <label class="form-check-label">
                    </div>
                    <button type="submit" class="btn btn-primary mb-2"> Submit </button>
                </form>
                <div class="card-body">
                    <h4 class="card-title">Liste des codes avec montant</h4>
                    </p>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                   
                                    <th>Code</th>
                                    <th>Amount</th>
                               
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($allcode as $cd) { ?>
                                    <tr>
                                       
                                        <td><?php echo $cd->numero; ?></td>
                                        <td><?php echo number_format($cd->valeur,0,"."," "); ?> AR</td>
                                   
                                    </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>