<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($error)){
            echo $error;
        }
    ?>
    <div>
        <form action="<?php echo base_url('ControllerAdmin/validerInsertionRegime'); ?>" method="post">
            <p>Nom :
            <input type="text" name="nom">
            </p>
            <p>
                <select name="objectif">
                    <option value="">choisissez</option>
                    <?php foreach($objectif as $obj){ ?>
                    <option value="<?php echo $obj->idobjectif; ?>"><?php echo $obj->nomobjectif; ?></option>
                    <?php } ?>
                </select>
            </p>
            <p>Variation poids:
            <input type="number" name="variationPoids">
            </p>
            <p>Duree:
            <input type="number" name="duree">
            </p>
            <p>Prix unitaire:
            <input type="number" name="pu">
            </p>
            <?php
                foreach($repas as $rp){
            ?>
            <p><input type="checkbox" name="idrepas[]" value="<?php echo $rp->idrepas; ?>"><?php echo $rp->nomrepas; ?></p>
            <?php
                }
            ?>
            <p><input type="submit" value="OK"></p>
        </form>
    </div>
</body>
</html>