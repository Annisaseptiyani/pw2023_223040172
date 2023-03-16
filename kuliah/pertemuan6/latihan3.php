<?php
    $mahasiswa= ['Nama'=>'Annisa','binatang'=>'🐨','makanan'=>'🍕'],
['Nama'=>'yesi','binatang'=>'🐱','makanan'=>'🍔'],
['Nama'=>'ika','binatang'=>'🐯','makanan'=>'🌭'],
['Nama'=>'nisa','binatang'=>'🦝','makanan'=>'🥗'],
['Nama'=>'ichka','binatang'=>'🐇','makanan'=>'🥨']
];
//Array asosiatif adalah
//array yang dibuat dengan sendiri

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>
   <h2>Daftar mahasiswa</h2>
   <?php foreach ($mahasiswa as $mhs)  { ?>
   <ul>
    <li>Nama : <?= $mhs ['Nama']?></li>
    <li>Makanan : <?= $mhs ['makanan'] ?></li>
    <li>Binatang:  <?= $mhs['binatang'] ?> <li>
</ul>
   <?php } ?>

</body>
</html>