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
    <form action="<?php echo base_url('ControllerFaneva/demandeAjoutCode'); ?>" method="post">
        <p><input type="text" placeholder="entrer code" name="numero"></p>
        <p><input type="submit" value="OK"></p>
    </form>
    
    <div>
        <h3>Liste de tous les codes</h3>
        <ul>
            <?php foreach($allcode as $cd) {?>
                <li><?php echo $cd->numero; ?></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>