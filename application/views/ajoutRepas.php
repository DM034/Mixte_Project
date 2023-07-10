<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($error)){
            echo $error;
        }
    ?>
    <div>
        <h3>ajout repas</h3>
        <form action="<?php echo base_url('ControllerAdmin/validerInsertionRepas'); ?>" method="post" enctype="multipart/form-data">
            <p>Nom repas :<input type="text" name="repas"></p>
            <p>Photo : <input type="file" name="photo"></p>
            <p><input type="submit" value="OK"></p>
        </form>
    </div>
</body>
</html>