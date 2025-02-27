<?php

include "../koneksi.php";
    $id=$_GET['id'];
    $query=mysqli_query($koneksi,
    "delete from user where pelangganid='$id'");
    
    

    // Mengecek apakah query berhasil dijalankan
    if ($query) {
        // Jika berhasil, redirect dengan pesan sukses
        header("Location:petugas.php?pesan=deletesukses");
    } else {
        // Jika gagal, redirect dengan pesan gagal
        header("Location:petugas.php?pesan=deletegagal");
    }
?>
