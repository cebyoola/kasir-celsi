
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../koneksi.php";

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
// Mengambil data dari form

$namaproduk=$_POST['namaproduk'];
$stok=$_POST['stok'];
$harga=$_POST['harga'];
// Query untuk memasukkan data ke database
$query = mysqli_query($koneksi, "INSERT INTO produk(namaproduk,harga,stok) 
    VALUES ('$namaproduk','$harga','$stok')");

// Mengecek hasil query
if ($query) {
    header("location:produk.php?pesan=tambahsukses");
    exit;
} else {
    header("location:produk.php?pesan=gagal");
    exit;
}

?>
