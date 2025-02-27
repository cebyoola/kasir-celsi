<?php
    include "../koneksi.php";
    //mengambil data inputan user
    $id_dokter=$_POST['id_dokter'];  
    $nama_dokter=$_POST['nama_dokter'];
    $spesialis=$_POST['spesialis'];

    //query edit data
    $query=mysqli_query($koneksi,"update dokter SET
    id_dokter='$id_dokter',
    nama_dokter='$nama_dokter',
    spesialis ='$spesialis'
    where id_dokter='$id_dokter'");

    if($query){
        header("location:datadokter.php?pesan=editsukses");
     }else{
        header("location:datadokter.php?pesan=editgagal");
     }

?>