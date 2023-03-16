<?php
$perangkatkeraskomputer=["Motherboar","Processor","Hard Disk","PC Coller","VGA Card","SSD"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 4</title>
</head>
<body>
<h2>Macam-macam perangkat keras komputer</h4>
<ol>

<?php foreach ($perangkatkeraskomputer as $komputer) {?>
    <li><?= $komputer ?></li>
    <?php } ;?>
</ol>
    <?php 
    $perangkatkeraskomputer[] = "Card Reader";
    $perangkatkeraskomputer[] = "Modem";
    sort($perangkatkeraskomputer);

    ?>
    <h4>Macam-macam perangkat keras komputer baru</h4>
    <ol>
        <?php foreach ($perangkatkeraskomputer as $komputer) { ?>
        <li><?= $komputer; ?></li>
        <?php }; ?>
    </ol>



    
</body>
</html>
