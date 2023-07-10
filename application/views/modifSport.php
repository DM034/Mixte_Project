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
        <h3>Modifier sport</h3>
        <form action="<?php echo base_url('ControllerAdmin/validerModif/'.$sport[0]->idsport); ?>" method="post">
            <p>
                Nom sport : 
                <input type="text" value="<?php echo $sport[0]->nomsport ;?>" name="nomsport"/>
            </p>
            <p>
                Objectif :
                    <select name="objectif">
                        <option value="">Choisissez</option>
                    <?php
                        foreach ($objectif as $obj) {
                        $selected = ($obj->idobjectif == $sport[0]->idobjectif) ? 'selected' : '';
                    ?>
                        <option value="<?php echo $obj->idobjectif; ?>" <?php echo $selected; ?>><?php echo $obj->nomobjectif; ?></option>
                    <?php
                        }
                    ?>
                    </select>

            </p>
            <p>
                Duree : 
                <input type="number" value="<?php echo $sport[0]->duree; ?>" name="duree"/>
            </p>
            <p>
                Variation poids : 
                <input type="number" value="<?php echo $sport[0]->variationPoids; ?>" name="variationPoids"/>
            </p>
            <p><input type="submit" value="valider"></p>
        </form>
    </div>
</body>
</html>