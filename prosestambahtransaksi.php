<?php
include "../koneksi.php";
$nama=$_POST['nama'];
$id=$_POST['id'];
$tanggal=$_POST['tanggalpenjualan'];

$query=mysqli_query($koneksi,
"insert into penjualan
(tanggalpenjualan,pelangganid)
values('$tanggal','$id')");

if($query){
    $id_trakir=mysqli_insert_id($koneksi);
    header("location:tambahdetailtransaksi.php?id=".$id_trakir);
}else{
    header("location:tambahtransaksi.php?pesan=tambahgagal");
}

?>