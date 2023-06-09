<?php
require '../function.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM tb_product WHERE
judul_buku like '%$keyword%' OR
penulis like '%$keyword' OR
penerbit like '%$keyword'";

$annis = query($query);

?>
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