<?php
session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'function.php';
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

// cek apakah data berhasil ditambahkan atau tidak
if(tambah($_POST) >0 ){
    echo "
<script>
alert('data berhasil ditambahkan!');
document.location.href = 'index1.php';
</script>
    ";
}else{
    echo "
    <script>
alert('data gagal ditambahkan!');
document.location.href = 'index1.php';
</script>
    ";
}

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data produk</title>
</head>
<body>
    <h1>Tambah data produk</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="judul_buku"> judul buku : </label>
               <input type="text" name="judul_buku" id="judul buku"
               required>
           </li>
           <li>
                <label for="penulis"> Penulis buku : </label>
               <input type="text" name="penulis" id="penulis"
               required>
           </li>
           <li>
                <label for="penerbit"> Tanggal terbit: </label>
               <input type="date" name="penerbit" id="penerbit"
               required>
           </li>
           <li>
                <label for="harga"> Harga buku: </label>
               <input type="text" name="harga" id="harga"
               required>
           </li>
           <li>
                <label for="sinopsis"> sinopsis buku: </label>
               <input type="text" name="sinopsis" id="sinopsis"
               required>
           <li>
                <label for="spek"> spesifikasi buku: </label>
               <input type="text" name="spek" id="spek"
               required>
           </li>
           <li>
                <label for="gambar"> Gambar : </label>
               <input type="file" name="gambar" id="gambar"
               required>
           </li>
           <li>
        <button type="submit" name="submit">Tambah Data</button>
</li>
         </ul>
       <form>
   </body>
</html>