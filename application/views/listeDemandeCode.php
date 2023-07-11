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
        <h3>Liste demande code</h3>
        <ul>
            <?php foreach($demande as $dem){ ?>
                <li>
                    <?php echo $dem->email."num code".$dem->numero."code valeur".$dem->valeur; ?>
                    <a href="<?php echo base_url('ControllerFaneva/accepterDemande/'.$dem->idcode); ?>"><button>valider</button></a>
                </li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>