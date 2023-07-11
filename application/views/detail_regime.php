
    <div class="col-md-6 grid-margin stretch-card align-self-center">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title align-self-center"><?php echo $regimeRepas[0]->nom; ?> </h4>
                <div class="col-md-12 grid-margin stretch-card align-self-center">
                    <div class="card">
                        <div class="card-body align-self-center">
                            <h4 class="card-title">Detail</h4>
                            <ul>
                                <li>Repas :
                                    <ul>
                                        <?php foreach ($regimeRepas as $rp) { ?>
                                            <li><?php echo $rp->nomrepas; ?></li>
                                        <?php } ?>

                                
                                    </ul>
                                </li>
                                <li>Duree : <?php echo $regimeRepas[0]->duree; ?> jours</li>
                                <li>Variation du poids : <?php echo $regimeRepas[0]->nomobjectif; ?> <?php echo $regimeRepas[0]->variationPoids; ?> kilo</li>
                                <li>Prix : <?php echo number_format($regimeRepas[0]->prixunitaire,0,"."," "); ?> AR </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

