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
        <h3>Liste des repas</h3>
        <a href="<?php echo base_url('ControllerAdmin/formAjoutRepas'); ?>"><button>Ajouter</button></a>
        <ul>
            <?php foreach($allrepas as $repas){ ?>
                <li>
                    <?php echo $repas->nomrepas ?>
                    <a href="<?php echo base_url('ControllerAdmin/modifierRepas/'.$repas->idrepas); ?>"><button>Modifier</button></a>
                    <a href="<?php echo base_url('ControllerAdmin/detailRepas/'.$repas->idrepas); ?>"><button>Detail</button></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>