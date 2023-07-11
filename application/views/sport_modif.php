<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-md-6 stretch-card center" style="margin-left: 10cm;margin-top: 3cm;">
        <form action="<?php echo base_url('ControllerAdmin/validerModif/' . $sport[0]->idsport); ?>" method="post">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Modifier sport</h4>

                    <div class="form-group">
                        <label>Selectionner l'objectif</label>
                        <select class="js-example-basic-single select2-hidden-accessible" style="width: 75%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="objectif">
                            <?php
                            foreach ($objectif as $obj) {
                                $selected = ($obj->idobjectif == $sport[0]->idobjectif) ? 'selected' : '';
                            ?>

                                <option value="<?php echo $obj->idobjectif; ?>" <?php echo $selected; ?> data-select2-id="3"> <?php echo $obj->nomobjectif; ?> </option>
                            <?php
                            }
                            ?>

                        </select>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Nom du sport</label>
                            <input type="text" value="<?php echo $sport[0]->nomsport; ?>" name="nomsport" />

                        </div>
                        <div class="form-group row">
                            <label>Duree</label>
                            <input type="text" class="form-control" value="<?php echo $sport[0]->duree; ?>" name="duree">
                        </div>
                        <div class="form-group row">
                            <label>Variation du poids</label>
                            <input type="text" class="form-control" value="<?php echo $sport[0]->variationPoids; ?>" name="variationPoids">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2"> Modifier </button>
                <?php
                if (isset($error)) { ?>
                <p class="text-danger">  <?php echo $error; ?> </p>
                <?php
                }
                ?>
            </div>
        </form>
    </div>


</body>

</html>