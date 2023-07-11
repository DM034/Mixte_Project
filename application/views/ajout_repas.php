<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="col-md-6 stretch-card center" style="margin-left: 10cm;margin-top: 3cm;">
        <form action="<?php echo base_url('ControllerAdmin/validerInsertionRepas'); ?>" method="post" enctype="multipart/form-data">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Ajouter repas</h4>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Nom du repas</label>
                            <input type="text" class="form-control" name="repas">
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group row">
                            <label>Photo </label>
                            <input type="file" name="photo">
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <?php
                    if (isset($error)) { ?>
                    <p class="text-danger">  <?php  echo $error; ?> </p>
                    <?php
                    }
                    ?>
                </div>

                <button type="submit" class="btn btn-primary mr-2"> Submit </button>
            </div>
        </form>
    </div>


</body>

</html>