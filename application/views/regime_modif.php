<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-md-6 stretch-card center" style="margin-left: 10cm;margin-top: 1cm;">
        <form action="<?php echo base_url('ControllerAdmin/validerModifRegime/' . $regimeRepas[0]->idregime); ?>" method="post">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Modifier regime</h4>
                    <div class="form-group">
                        <label>Selectionner l'objectif</label>
                        <select class="js-example-basic-single select2-hidden-accessible" style="width: 75%;" data-select2-id="1" tabindex="-1" aria-hidden="true" name="objectif">

                            <?php
                            foreach ($objectif as $obj) {
                                $selected = ($obj->idobjectif == $regimeRepas[0]->idobjectif) ? 'selected' : '';
                            ?>
                                <option data-select2-id="3" value="<?php echo $regimeRepas[0]->idobjectif; ?>" <?php echo $selected; ?>><?php echo $obj->nomobjectif; ?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Nom du regime</label>
                            <input type="text" class="form-control" value="<?php echo $regimeRepas[0]->nom; ?>" name="nomregime">
                        </div>
                    </div>
                    <div class="row">
                        <p>Choisissez les repas pour le regime</p>

                        <div class="col-md-6">
                            <div class="form-group">
                                <?php foreach ($repas as $rep) {
                                    foreach ($regimeRepas as $rp) {
                                        $checked = '';
                                        if ($rep->idrepas == $rp->idrepas) {
                                            $checked = 'checked';
                                            break;
                                        }
                                    } ?>
                                    <div class="form-check form-check-primary">
                                        <label class="form-check-label">
                                            <input type="checkbox" class="form-check-input" <?php echo $checked; ?> name="idrepas[]" value="<?php echo $rep->idrepas; ?>" /><?php echo $rep->nomrepas; ?> <i class="input-helper"></i></label>
                                    </div>
                                <?php
                                } ?>
                             
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Duree</label>
                            <input type="number" class="form-control" value="<?php echo $regimeRepas[0]->duree; ?>" name="duree">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Variation du poids</label>
                            <input type="number" class="form-control" value="<?php echo $regimeRepas[0]->variationPoids; ?>" name="variation">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Prix</label>
                            <input type="number" class="form-control" value="<?php echo $regimeRepas[0]->prixunitaire; ?>" name="pu">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2"> Modifier </button>

                <?php if (isset($error)) {
                    ?>
                    <p class="text-danger"> <?php echo $error; ?> </p>
                <?php
                }
                ?>
            </div>
        </form>
    </div>


</body>

</html>