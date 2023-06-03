<?php
$mahasiswa= ['Anisa','yesi','ika','Nisa','ichka'];
$binatang = ['🐨','🐱','🐯','🦝','🐇'];
$makanan  = ['🍕','🍔','🌭','🥗','🥨'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 1</title>
</head>
<body>
   <h2>Daftar mahasiswa</h2>
   
   <?php foreach ($mahasiswa as $i=>  $m) { ?>
   <ul>
    <li>Nama : <?= $m; ?></li>
    <li>Makanan favorit </li>
    <li>Bintang : 🐱<li>
</ul>
   <?php } ?>

</body>
</html>