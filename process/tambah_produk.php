<link rel="stylesheet" href="../css/index.css">

<?php

    include_once 'koneksi.php';

    // Assign variable dari GET
    $kode = $_GET['kode'];
    $nama = $_GET['nama'];
    $stok = $_GET['stok'];
    $harga = $_GET['harga'];
    $kategori = $_GET['kategori'];

    // Query Input ke table tamu
    $sql = "INSERT INTO produk VALUES(
        '{$kode}',
        '{$nama}',
        '{$stok}',
        '{$harga}',
        '{$kategori}');";
    // Jalankan Query
   mysqli_query($conn,$sql);
      
   header("location: ../produk.php");
?>

