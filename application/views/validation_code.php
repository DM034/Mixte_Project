<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <div class="col-lg-6 grid-margin stretch-card" style="margin-left: 5cm;margin-top: 1cm;">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Code a valider</h4>
        <div class="table-responsive">
          <table class="table">
            <thead>
              <tr>
                <th>Profile</th>
                <th>Code</th>
                <th>Montant</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($demande as $dem) { ?>
                <tr>
                  <td><?php echo $dem->email; ?></td>
                  <td><?php echo $dem->numero; ?></td>
                  <td><?php echo number_format($dem->valeur,0,"."," "); ?> AR</td>
                  <td>
                    <a href="<?php echo base_url('ControllerFaneva/accepterDemande/' . $dem->idcodeClient); ?>">
                      <button type="button" class="btn btn-success"> Valider </button>
                    </a>
                  </td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</body>

</html>