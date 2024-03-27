<?php
// Ambil data dari form
$nama = $_GET['nama'];
$produk = $_GET['produk'];
$jumlah = $_GET['jumlah'];

// Harga produk
$harga_tv = 2000000;
$harga_ac = 5000000;
$harga_kulkas = 4000000;

// Inisialisasi variabel hargaSatuan
$hargaSatuan = 0;

// Tentukan harga satuan berdasarkan produk yang dipilih
switch ($produk) {
    case 'TV':
        $hargaSatuan = $harga_tv;
        break;
    case 'AC':
        $hargaSatuan = $harga_ac;
        break;
    case 'Kulkas':
        $hargaSatuan = $harga_kulkas;
        break;
    default:
        echo "Produk tidak valid.";
        exit();
}

// Hitung total harga kotor
$totalbelanja = $hargaSatuan * $jumlah;

// Tentukan diskon berdasarkan total harga kotor
$diskon = 0.2 * $totalbelanja;

// Hitung PPN (10% dari total belanja dikurangi diskon)
$ppn = 0.1 * ($totalbelanja - $diskon);

// Hitung harga bersih
$hargaBersih = ($totalbelanja - $diskon) + $ppn;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hasil Transaksi</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="container">
        <h2>Hasil Transaksi</h2>
        <p>Nama Pelanggan : <?php echo $nama; ?></p>
        <p>Produk yang dibeli : <?php echo $produk; ?></p>
        <p>Harga Satuan : Rp <?php echo number_format($hargaSatuan, 0, ',', '.'); ?></p>
        <p>Jumlah yang dibeli : <?php echo $jumlah; ?></p>
        <p>Total Belanja : Rp <?php echo number_format($totalbelanja, 0, ',', '.'); ?></p>
        <p>Diskon : Rp <?php echo number_format($diskon, 0, ',', '.'); ?></p>
        <p>PPN (10%) : Rp <?php echo number_format($ppn, 0, ',', '.'); ?></p>
        <p>Harga Bersih : Rp <?php echo number_format($hargaBersih, 0, ',', '.'); ?></p>

        <a href="index.html">Kembali ke Form</a>
    </div>
</body>

</html>