<?php
include "../koneksi.php";

// Ambil data dari form
$id = $_POST['id']; // Menggunakan id yang disembunyikan di form
$nama = $_POST['namauser'];
$email = $_POST['email'];
$password = $_POST['password'];
$nomortelepon = $_POST['nomertelepon']; // Sesuaikan dengan nama input yang digunakan
$alamat = $_POST['alamat'];
$level = $_POST['level'];

// Query untuk update data
$query = mysqli_query($koneksi, "UPDATE user SET 
    namauser = '$nama', 
    email = '$email', 
    password = '$password',
    nomertelepon = '$nomortelepon', 
    alamat = '$alamat', 
    level = '$level' 
    WHERE pelangganid = '$id'");

// Redirect dengan pesan berhasil atau gagal
if ($query) {
    header("location: petugas.php?pesan=editsukses");
} else {
    header("location: petugas.php?pesan=editgagal");
}
?>
