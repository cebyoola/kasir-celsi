<?php

include "../koneksi.php";
    $id=$_GET['id'];
    $query=mysqli_query($koneksi,
    "delete from produk where produkid='$id'");
    
    

    // Mengecek apakah query berhasil dijalankan
    if ($query) {
        // Jika berhasil, redirect dengan pesan sukses
        header("Location:produk.php?pesan=deletesukses");
    } else {
        // Jika gagal, redirect dengan pesan gagal
        header("Location:produk.php?pesan=deletegagal");
    }
?>
