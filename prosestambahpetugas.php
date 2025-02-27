<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

include "../koneksi.php";

if (!$koneksi) {
    die("Koneksi ke database gagal: " . mysqli_connect_error());
}
// Mengambil data dari form

    $nama=$_POST['nama'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $nomertelepon=$_POST['nomertelepon'];
    $alamat=$_POST['alamat'];
    $level=$_POST['level'];

// Query untuk memasukkan data ke database
$query = mysqli_query($koneksi, "INSERT INTO user (namauser, alamat, nomertelepon, email, password, level) 
    VALUES ('$nama', '$alamat', '$nomertelepon', '$email', '$password', '$level')");

// Mengecek hasil query
if ($query) {
    header("location: petugas.php?pesan=tambahsukses");
    exit;
} else {
    header("location: petugas.php?pesan=gagal");
    exit;
}

?>
