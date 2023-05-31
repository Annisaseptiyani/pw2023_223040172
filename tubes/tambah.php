<?php
//koneksi ke dbms
$conn = mysqli_connect("localhost","root","","tubes");
//cek apakah tombol submit sudah ditekan atau belum
if (isset($_POST["submit"])) {
//ambil data dari tiap elemen dalam form
$judul_buku = $_POST["judul_buku"];
$penulis = $_POST["penulis"];
$penerbit = $_POST["penerbit"];
$harga = $_POST["harga"];
$gambar = $_POST["gambar"];

//query insert data
$query = "INSERT INTO tb_product VALUES(null,'$judul_buku','$penulis','$penerbit','$harga','$gambar')";
mysqli_query($conn,$query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambha data produk</title>
</head>
<body>
    <h1>Tambah data produk</h1>
    <form action="" method="post">
        <ul>
            <li>
                <label for="judul_buku"> judul buku : </label>
               <input type="text" name="judul_buku" id="judul buku">
               
           </li>
           <li>
                <label for="penulis"> Penulis buku : </label>
               <input type="text" name="penulis" id="penulis">
               
           </li>
           <li>
                <label for="penerbit"> Tanggal terbit: </label>
               <input type="date" name="penerbit" id="penerbit">
               
           </li>
           <li>
                <label for="harga"> Harga buku: </label>
               <input type="text" name="harga" id="harga">
               
           </li>
           <li>
                <label for="gambar"> Gambar : </label>
               <input type="text" name="gambar" id="gambar">
               
           </li>
           <li>
        <button type="submit" name="submit">Tambah Data</button>
</li>
         </ul>
       <form>
   </body>
</html>