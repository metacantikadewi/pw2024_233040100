<?php
$hewan = ["🐱", "🐰", "🙊", "🐨", "🐄"];
$makanan = ["🍕", "🍞", "🍔", "🧀", "🍜"]\

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UFT-8">
    <meta name="viewport" content="width, initial-scale.0">
    <tittle>Document</tittle>

</head>
<body>
    <h3>Daftar Binatang</h3>
    <ol>
        <?php fororeach($binatang as $b) { ?>
        <li><?= $b; ?></li>
       <?php endforeach } ?>
    </lo>
    <ul>

        </head>
        <body>
        <h3>Daftar Makanan</h3>
    <ol>
        <?php fororeach($makanan as $b) { ?>
        <li><?= $b; ?></li>
       <?php endforeach } ?>
    </lo>
    <ul>
</body>
</html>