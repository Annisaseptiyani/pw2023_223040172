<?php
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
</head>
<body>
    <h1>Anni'sshop</h1>

    <a href="tambah.php">Tambah data mahasiswa</a>
    <br></br>



    <form action="" method="post">

   <input type="text" name="keyword" size="30" autofocus
   placeholder="masukan keyword pencarian...." autocomplete="off">
   <button type="submit" name="cari">Cari!</button>
</form>

<br>
    
    <table border="1" cellpadding="10" cellspacing="0">
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

</body>
</html>