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
    echo "<pre>";
    echo "+-----------------------------+\n";
    echo "|       Detail Pemesanan      |\n";
    echo "+-----------------------------+\n";

// Isi data dengan rata kiri dan padding
    printf("| %-12s : %-12s |\n", "Nama", $nama);
    printf("| %-12s : %-12s |\n", "Jumlah Tiket", $jumlah);
    printf("| %-12s : %-12s |\n", "Kategori", $kategori);
    printf("| %-12s : %-12s |\n", "Total Harga", $total);

    echo "+-----------------------------+\n";
    echo " TERIMA KASIH ATAS PEMESANAN NYA";
    echo "<?pre>";
}
?>
