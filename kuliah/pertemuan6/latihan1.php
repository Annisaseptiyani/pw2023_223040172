<?php
//Array
//membuat Array
$hari= array ('Senin','Selasa','rabu');
$bulan = ['januari','Februari','Maret'];
$myArray = ['Annisa',45,false];
$binatang = ['🐨','🐱','🐯'];
//mencetak Array
echo $hari[2];
echo "<br>";
echo $binatang [1];
//mencetak seluruhnya 
//var_dump,print_r
var_dump ($hari);
echo "<br>";
print_r ($bulan);
echo "<br>";
print_r ($myArray);
//Memanipulasi Array
//Menggunakan index
$hari[2]='rabu';
print_r ($hari);
//menambhakan elemen di akhir dengan menggosongkan indexnya
$hari[]="rabu";
print_r ($hari);
echo '<hr>';
//menambahkan elemen di akhir dengan menggunkan arry_push 
array_push($bulan);
print_r ($bulan);
?>