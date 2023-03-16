<?php
$angka=10;

function cek_genap_ganjil ($angka)//parameter
 {

if ($angka % 2 == 1 ) {
    return "$angka adalah bilangan ganjil!";
}else {
    return "$angka adalah bilangan genap!";
}
}
echo cek_genap_ganjil($angka);//argument
echo '<br>';
echo cek_genap_ganjil(100);
?>