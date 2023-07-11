<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="<?php echo base_url('ControllerAdmin/formInsertionRegime'); ?>"><button>ajouter</button></a>
    <div>
        <ul>
        <?php foreach ($allRegime as $regime) { ?>
            <li><?php echo $regime->nom ?></li>
            <a href="<?php echo base_url('ControllerAdmin/detailRegime/'.$regime->idregime); ?>"><button>detail</button></a>
            <a href="<?php echo base_url('ControllerAdmin/formModifRegime/'.$regime->idregime); ?>"><button>modifier</button></a>
            <a href="<?php echo base_url('ControllerAdmin/validerSupprimerRegime/'.$regime->idregime); ?>"><button>supprimer</button></a>
        <?php } ?>
        </ul>  
    </div>
</body>
</html>