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
    var_dump($objectif);
        if(isset($error)){
            echo $error;
        }
    ?>
    <div>
        <form action="<?php echo base_url('ControllerAdmin/validerModifRegime/'.$regimeRepas[0]->idregime); ?>" method="post">
        <p>
            Nom regime:
            <input type="text" value="<?php echo $regimeRepas[0]->nom; ?>" name="nomregime"/>
        </p>
        <p>
            Objectif:
            <select name="objectif">
                <option value=""></option>
            <?php
                foreach($objectif as $obj){
                    $selected = ($obj->idobjectif == $regimeRepas[0]->idobjectif) ? 'selected' : '';
            ?>
            <option value="<?php echo $regimeRepas[0]->idobjectif; ?>" <?php echo $selected; ?>><?php echo $obj->nomobjectif; ?></option>
            <?php
                }
            ?>
            </select>
            
            
        </p>
        <p>
            Variation poids:
            <input type="number" value="<?php echo $regimeRepas[0]->variationPoids; ?>" name="variation"/>
            
        </p>
        <p>
            Duree:
            <input type="number" value="<?php echo $regimeRepas[0]->duree; ?>" name="duree"/>
            
        </p>
        <p>
            PU:
            <input type="number" value="<?php echo $regimeRepas[0]->prixunitaire; ?>" name="pu"/>
            
        </p>
        <p>
            Repas composant:
            <?php 
            foreach ($repas as $rep) {
                foreach($regimeRepas as $rp){
                    $checked = '';
                    if($rep->idrepas == $rp->idrepas){
                        $checked = 'checked';
                        break;
                    } 
            ?>
            <?php }?>
            <input type="checkbox" <?php echo $checked; ?> name="idrepas[]" value="<?php echo $rep->idrepas; ?>"/><?php echo $rep->nomrepas; ?>
            <?php 
            }?>
        </p>
        <p><input type="submit" value="OK"></p>
        </form>
    </div>
    
</body>
</html>