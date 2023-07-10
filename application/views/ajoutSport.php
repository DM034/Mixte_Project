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
        <h3>Ajouter sport</h3>
        <form action="<?php echo base_url('ControllerAdmin/validerInsertionSport'); ?>" method="post">
            <p>
                Nom sport : 
                <input type="text" name="nomsport"/>
            </p>
            <p>
                Objectif :
                    <select name="objectif">
                        <option value="">Choisissez</option>
                    <?php
                        foreach ($objectif as $obj) {
                        
                    ?>
                        <option value="<?php echo $obj->idobjectif; ?>"><?php echo $obj->nomobjectif; ?></option>
                    <?php
                        }
                    ?>
                    </select>

            </p>
            <p>
                Duree : 
                <input type="number"  name="duree"/>
            </p>
            <p>
                Variation poids : 
                <input type="number" name="variationPoids"/>
            </p>
            <p><input type="submit" value="valider"></p>
        </form>
    </div>
</body>
</html>