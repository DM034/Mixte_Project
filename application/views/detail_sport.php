<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
        <div class="col-md-6 grid-margin stretch-card align-self-center">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title align-self-center"><?php echo $sport[0]->nomsport ;?></h4>
                        <div class="col-md-12 grid-margin stretch-card align-self-center">
                            <div class="card">
                                <div class="card-body align-self-center">
                                    <h4 class="card-title">Detail</h4>
                                    <ul>
                                        <li>Duree : <?php echo $sport[0]->duree; ?> jours</li>
                                        <li>Variation du poids : <?php echo $objectif[0]->nomobjectif; ?> <?php echo $sport[0]->variationPoids; ?> kilo</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>


</body>

</html>