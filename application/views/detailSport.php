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
        <h3>Detail sport</h3>
        <form action="<?php echo base_url('ControllerAdmin/validerModif/'.$sport[0]->idsport); ?>" method="post">
            <p>
                Nom sport : 
                <?php echo $sport[0]->nomsport ;?>
            </p>
            <p>
                Objectif :
                    <?php echo $objectif[0]->nomobjectif; ?>
            </p>
            <p>
                Duree : 
                <?php echo $sport[0]->duree; ?>
            </p>
            <p>
                Variation poids : 
                <?php echo $sport[0]->variationPoids; ?>
            </p>
        </form>
    </div>
</body>
</html>