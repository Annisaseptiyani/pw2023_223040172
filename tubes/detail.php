<?php 

require 'function.php';

$id = $_GET['id'];

$product = query("SELECT * FROM tb_product WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <title>Halaman Detail</title>
</head>

<body>
    <nav class="navbar bg-body-tertiary">
        <div class="container">
            <a href="#" class="btn btn-secondary" onclick="history.back();"><i class="bi bi-arrow-left-circle"></i></a>
        </div>
    </nav>
    <div class="container card mt-2">
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center mt-2">
                <div class="gambar">
                    <img src="img\<?= $product['gambar']; ?>" class="img-fluid rounded" alt="<?= $product['gambar']; ?>">
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-6 text-center">
                <div class="judul">
                    <h1 class="card-title">-- <?= $product['judul_buku']; ?> --</h1><br>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-4">
            <div class="col-lg-6 text-center">
                <div class="card-body">
                    <p class="card-subtitle"><b>Penerbit</b> : <?= $product['penerbit']; ?></p><br>
                    <p class="card-subtitle"><b>penulis</b> : <?= $product['penulis']; ?></p><br>
                </div>
                <div class="subtitle">
                    <p class="card-text"><b>Sinopsis Buku</b> : <pre><?= $product['sinopsis']; ?></pre></p>
                </div>
                <div class="text mt-4">
                    <p class="card-text"><b>Spesifikasi Buku</b> : <pre><?= $product['spek_buku']; ?></pre></p>
                </div>
                <div class="text mt-4">
                    <p class="card-text"><b>Harga</b> : Rp. <?= number_format($product['harga'], 2, ',', '.'); ?></p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>