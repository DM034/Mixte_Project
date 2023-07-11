<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h3>Detail repas</h3>
        <?php if(!empty($detail)) { ?>
        <p>Nom photo:<?php echo $detail[0]->nomPhoto; ?></p>
        <img src="<?php echo base_url($detail[0]->pathPhoto); ?>" alt="">
        <?php } ?>
    </div>
</body>
</html>