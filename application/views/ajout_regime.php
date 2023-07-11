<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-md-6 stretch-card center" style="margin-left: 10cm;margin-top: 1cm;">
        <form action="<?php echo base_url('ControllerAdmin/validerInsertionRegime'); ?>" method="post">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter regime</h4>
                    <div class="form-group">
                        <label>Selectionner l'objectif</label>
                        <select class="js-example-basic-single select2-hidden-accessible" style="width: 75%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="objectif">
                            <?php foreach ($objectif as $obj) { ?>
                                <option value="<?php echo $obj->idobjectif; ?>"><?php echo $obj->nomobjectif; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Nom du regime</label>
                            <input type="text" class="form-control" name="nom">
                        </div>
                    </div>
                    <div class="row">
                        <p>Choisissez les repas pour le regime</p>
                        <div class="col-md-6">
                            <div class="form-group">
                                <?php
                                foreach ($repas as $rp) {
                                ?>
                                    <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox" name="idrepas[]" value="<?php echo $rp->idrepas; ?>"><?php echo $rp->nomrepas; ?> <i class="input-helper"></i></label>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Duree</label>
                            <input type="number" class="form-control" name="duree">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Variation du poids</label>
                            <input type="number" class="form-control" name="variationPoids">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Prix unitaire</label>
                            <input type="number" class="form-control" name="pu">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <?php if(isset($error)){ ?>
                        <p class="text-danger"> <?php  echo $error; ?> </p>
                        <?php } ?>
                    </div>

                </div>
                <button type="submit" class="btn btn-primary mr-2"> Submit </button>
            </div>
        </form>
    </div>


</body>

</html>