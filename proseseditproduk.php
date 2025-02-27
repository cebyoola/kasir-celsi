<?php
   include "../koneksi.php";

    // Ambil data dari form
    $id=$_POST['produkid'];
    $namaproduk=$_POST['namaproduk'];
    $harga=$_POST['harga'];
    $stok=$_POST['stok'];
    

    // Query untuk update data
    $query = mysqli_query($koneksi, "UPDATE produk SET 
        namaproduk='$namaproduk', 
        harga='$harga', 
        stok='$stok' 
        WHERE produkid='$id'");

    // Redirect dengan pesan berhasil atau gagal
    if ($query) {
        header("location:produk.php?pesan=editsukses");
    } else {
        header("location:produk.php?pesan=editgagal");
    }
?>