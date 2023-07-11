<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h4 class="card-title" style="margin-left: 5cm;margin-top: 1cm;">Liste des sports</h4>
    <div class="table-responsive w-75" style="margin-left: 5cm;margin-top: 1cm;">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sport</th>
                    <th>Duree</th>
                    <th>Variation Poids</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Natation</td>
                    <td>7 jours</td>
                    <td>+/- 15 kilo</td>
                    <td>
                        <button type="button" class="btn btn-primary mb-2"> Modifier </button>
                        <a href="<?php echo base_url('Admin/sport_modif'); ?>">mod</a>
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger mb-2"> Supprimer </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</body>

</html>