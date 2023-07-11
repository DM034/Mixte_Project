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
        <p>
            Nom regime:
            <?php echo $regimeRepas[0]->nom; ?>
        </p>
        <p>
            Objectif:
            <?php echo $regimeRepas[0]->nomobjectif; ?>
        </p>
        <p>
            Variation poids:
            <?php echo $regimeRepas[0]->variationPoids; ?>
        </p>
        <p>
            Duree:
            <?php echo $regimeRepas[0]->duree; ?>
        </p>
        <p>
            Pu:
            <?php echo $regimeRepas[0]->prixunitaire; ?>
        </p>
        <p>
            Repas composant:
            <ul>
                <?php foreach($regimeRepas as $rp){ ?>
                <><?php echo $rp->nomrepas; ?></li>
                <?php } ?>
            </ul>
        </p>
    </div>
</body>
</html>