<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-md-6 stretch-card center" style="margin-left: 10cm;margin-top: 1cm;">
        <form action="">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Modifier regime</h4>
                    <div class="form-group">
                        <label>Selectionner l'objectif</label>
                        <select class="js-example-basic-single select2-hidden-accessible" style="width: 75%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="gain" data-select2-id="3">Gain</option>
                            <option value="perte" data-select2-id="21">Perte</option>
                        </select>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Nom du regime</label>
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <p>Choisissez les repas pour le regime</p>
                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-check form-check-primary">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" checked=""> Spaghetti <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check form-check-success">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" checked=""> Sosisy sy anana <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check form-check-info">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" checked=""> Crudite <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check form-check-danger">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" checked=""> Voanjobory sy Henakisoa <i class="input-helper"></i></label>
                                </div>
                                <div class="form-check form-check-warning">
                                    <label class="form-check-label">
                                        <input type="checkbox" class="form-check-input" checked=""> Lelen'omby saosy <i class="input-helper"></i></label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Duree</label>
                                <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Variation du poids</label>
                                <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2"> Modifier </button>
                <button class="btn btn-alert mr-2"> Supprimer </button>
            </div>
        </form>
    </div>


</body>

</html>