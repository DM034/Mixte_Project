<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-md-6 stretch-card center" style="margin-left: 10cm;margin-top: 3cm;">
        <form action="<?php echo base_url('ControllerAdmin/validerInsertionSport'); ?>" method="post">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter sport</h4>

                    <div class="form-group">
                        <label>Selectionner l'objectif</label>
                        <select class="js-example-basic-single select2-hidden-accessible" style="width: 75%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="objectif">
                            <option value="">Choisissez</option>
                            <?php
                            foreach ($objectif as $obj) {

                            ?>
                                <option value="<?php echo $obj->idobjectif; ?>"><?php echo $obj->nomobjectif; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>

                    <div class="col-md-9">

                        <div class="form-group row">
                            <label>Nom du sport</label>
                            <input type="text" class="form-control" name="nomsport">
                        </div>

                        <div class="form-group row">
                            <label>Duree</label>
                            <input type="text" class="form-control" name="duree">
                        </div>

                        <div class="form-group row">
                            <label>Variation du poids</label>
                            <input type="text" class="form-control" name="variationPoids">
                        </div>

                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2"> Valider </button>
            </div>
        </form>
    </div>


</body>

</html>