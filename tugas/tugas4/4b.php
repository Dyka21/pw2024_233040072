<?php 
$perangkat_keras = ["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"]
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perangkat Keras</title>
</head>
<body>
    <h3>Macam Macam perangkat keras komputer</h3>

    <ol>
    <?php foreach ($perangkat_keras as $pk) : ?>
        <li><?php echo $pk; ?></li>
        <?php endforeach; ?>
    </ol>
    <br>



    <h3>Macam Macam Perangkat Keras Komputer baru</h3>
<?php
array_push($perangkat_keras, "Card Reader", "Modem");
sort($perangkat_keras)
?>
    <ol>
    <?php foreach ($perangkat_keras as $pk) : ?>
        <li><?php echo $pk; ?></li>
        <?php endforeach; ?>
    </ol>
    <br>
</body>
</html>