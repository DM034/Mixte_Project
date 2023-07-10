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
        <form action="<?php echo base_url('ControllerAdmin/validerModifierRepas/'.$detail[0]->idrepas); ?>" method="post">
            <p><input type="text" value="<?php echo $detail[0]->nomrepas; ?>" name="repas"></p>
            <p><input type="submit" value="OK"></p>
        </form>
    </div>
</body>
</html>