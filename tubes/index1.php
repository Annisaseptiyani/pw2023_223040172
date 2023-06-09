<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("Location: login.php");
	exit;
}

//menyiapkan data untuk tabel
require 'function.php';
$annis = query("SELECT * FROM tb_product");

//tombol cari ditekan
if(isset($_POST["cari"])) {
    $annis = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" >
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" >
</head>
<body>
    <div class="container">
    <a href="logaut.php" class="btn btn-danger mt-2">Logout</a>

<h1>Anni'sshop</h1>

<a href="tambah.php" class="btn btn-primary">Tambah data mahasiswa</a>
<br></br>



<form action="" method="post" class="form">

<input type="text" name="keyword" size="30" autofocus
placeholder="masukan keyword pencarian...." autocomplete="off" class="form-control" id="keyword">
<button type="submit" name="cari" class="btn btn-secondary mt-2" id="tombol-cari">Cari!</button>
</form>

<br>
<div id="container">
<table border="1" cellpadding="10" cellspacing="0" class="table">
    <tr>
<th>No.</th>
<th>Aksi</th>
<th>judul buku</th>
<th>penulis</th>
<th>penerbit</th>
<th>harga</th>
<th>gambar</th>
</tr>
<?php $i = 1; ?>
<?php
foreach($annis as $row ):
?>
<tr>
<td><?= $i ?></td>
<td>
<a href="ubah.php?id=<?= $row["id"];?>">ubah</a> |
<a href="hapus.php?id=<?= $row["id"]; ?> "onclick="return confirm('Apakah anda yakin?');">hapus</a>
</td>
<td><?= $row["judul_buku"]; ?></td>
<td><?= $row["penulis"]; ?></td>
<td><?= $row["penerbit"]; ?></td>
<td><?= $row["harga"]; ?></td>
<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
</tr>
<?php $i++; ?>
<?php endforeach; ?>
</table>
  </div>
<script src="script.js"></script>
</body>
</html>