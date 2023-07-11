<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-md-6 stretch-card center" style="margin-left: 10cm;margin-top: 3cm;">
        <form action="">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter repas</h4>
                    <div class="form-group">
                        <label>Selectionner l'objectif</label>
                        <select class="js-example-basic-single select2-hidden-accessible" style="width: 75%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option value="gain" data-select2-id="3">Gain</option>
                            <option value="perte" data-select2-id="21">Perte</option>
                        </select>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Nom du repas</label>
                                <input type="text" class="form-control">
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mr-2"> Submit </button>
            </div>
        </form>
    </div>


</body>

</html>