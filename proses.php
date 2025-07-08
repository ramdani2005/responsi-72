<?php
function hitung_total($jumlah, $kategori) {
    $harga = $kategori === 'dewasa' ? 35000 : 15000;
    return $jumlah * $harga;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $jumlah = (int) $_POST["jumlah"];
    $kategori = $_POST["kategori"];
    $total = hitung_total($jumlah, $kategori);
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Nota Pemesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="output-page">

<div class="nota-container">
    <h2>Pemesanan Tiket Berhasil</h2>
    <h3>Nota Pemesanan</h3>
    
    <p>Nama: <?= $nama ?></p>
    <p>jumlah:  <?= $jumlah ?></p>
    <p>kategori: <?= $kategori ?></p>
    
    <hr style="border: 0.5px dotted #aaa; margin: 20px 0;">
    
    <div class="total">Total Bayar: Rp <?= number_format($total, 0, ',', '.') ?></div>
    
    <a href="form.html" class="btn-kembali">🔙 Kembali ke Form</a>
</div>

</body>
</html>

