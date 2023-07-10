<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <a href="<?php echo base_url('ControllerAdmin/formInsererSport'); ?>"><button>Nouveau</button></a>
        <ul>
        <?php foreach ($allSport as $sport) { ?>
            <li><?php echo $sport->nomsport ?></li>
            <a href="<?php echo base_url('ControllerAdmin/detailSport/'.$sport->idsport); ?>"><button>detail</button></a>
            <a href="<?php echo base_url('ControllerAdmin/formModifSport/'.$sport->idsport); ?>"><button>modifier</button></a>
            <a href="<?php echo base_url('ControllerAdmin/validerSuppr/'.$sport->idsport); ?>"><button>supprimer</button></a>
        <?php } ?>
        </ul>  
    </div>
</body>
</html>