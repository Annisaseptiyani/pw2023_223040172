<?php
session_start();
if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

require 'function.php';
// ambil data di URL
$id = $_GET ["id"];
//query data mahasiswa berdsarkan
$pro = query("SELECT * FROM tb_product WHERE id = $id")[0];

//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {

// cek apakah data berhasil diubah atau tidak
if(ubah($_POST) > 0 ){
    echo "
  <script>
        alert('data berhasil diubah!');
        document.location.href = 'index1.php';
  </script>
    ";
} else {
    echo "
    <script>
alert('data gagal diubah!');
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
    <h1>ubah data produk</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $pro["id"]; ?>">
        <input type="hidden" name="gambarlama" value="<?= $pro["gambar"]; ?>">
        <ul>
            <li>
                <label for="judul_buku"> judul buku : </label>
               <input type="text" name="judul_buku" id="judul_buku" 
                value="<?= $pro["judul_buku"];?>">
           </li>
           <li>
                <label for="penulis"> Penulis buku : </label>
               <input type="text" name="penulis" id="penulis"
               value="<?= $pro["penulis"];?>">
           </li>
           <li>
                <label for="penerbit"> Tanggal terbit: </label>
               <input type="date" name="penerbit" id="penerbit"
                value="<?= $pro["penerbit"];?>">
           </li>
           <li>
                <label for="sinopsis"> Sinopsis Buku: </label>
               <input type="text" name="sinopsis" id="sinopsis"
                value="<?= $pro["sinopsis"];?>">
           </li>
           <li>
                <label for="spek"> Spesifikasi Buku: </label>
               <input type="text" name="spek" id="spek"
                value="<?= $pro["spek_buku"];?>">
           </li>
           <li>
                <label for="harga"> Harga buku: </label>
               <input type="number" name="harga" id="harga"
             value="<?= $pro["harga"];?>">
           </li>
           <li>
                <label for="gambar"> Gambar : </label>
                <img src="img/<?= $pro['gambar']; ?>" width="40"> <br>
               <input type="file" name="gambar" id="gambar">
            
           </li>
           <li>
        <button type="submit" name="submit">Ubah</button>
</li>
         </ul>
       <form>
   </body>
</html>