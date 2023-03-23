<?php
$mahasiswa = [
   [
 "nama" => "Annisa septiyani",
 "nrp" => "223040172",
 "email" => "anisa.223040172@mail.unpas.ac.id",
 "jurusan" => "Teknik Informatika"
 ],
   [
 "nama" => "Dicky dwi dermawan",
 "nrp" => "223040150",
 "email" => "dicky150@gmail.com",
 "jurusan" => "Teknik informatika"
 
   ],
[
 "nama" => "Anissa nursafitri",
 "nrp" => "223040163",
 "email" => "anissa163@gmail.com",
 "jurusan" => "Teknik informatika"
 
    ],
    [
 "nama" => "Mustika weni",
 "nrp" => "223040139",
 "email" => "mustika139@gmail.com",
 "jurusan" => "Teknik informatika"
  
        ],
        [
            
 "nama" => "Yesi dedehidayati",
 "nrp" => "223040179",
 "email" => "yesi179@gmail.com",
 "jurusan" => "Teknik informatika"
 
        ],
        [
 "nama" => "Ryan Hidayat",
 "nrp" => "223040173",
 "email" => "ryan173@gmail.com",
 "jurusan" => "Teknik informatika"
  
        ],
        [
 "nama" => "Miftahul huda",
 "nrp" => "223040145",
 "email" => "miftahul145@gmail.com",
 "jurusan" => "Teknik informatika"
 
         ],
        [
 "nama" => "Ichka sabila",
 "nrp" => "223040144",
 "email" => "ichka144@gmail.com",
 "jurusan" => "Teknik informatika"
 
        ],
        [
 "nama" => "Ilman hanifa",
 "nrp" => "223040165",
 "email" => "anissa163@gmail.com",
 "jurusan" => "Teknik informatika"
 
        ],
        [
  "nama" => "Narapati keysa anandi",
  "nrp" => "223040155",
  "email" => "narapati155.com",
  "jurusan" => "Teknik informatika" 
            ]  
        ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama-nama mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h2>
     
    <?php foreach ($mahasiswa as $mhs):?>
       <ul>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP  : <?= $mhs["nrp"]; ?></li>
        <li>Email: <?= $mhs["email"]; ?></li>
        <li>Jurusan: <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
