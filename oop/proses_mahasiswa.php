<?php
include 'class_mahasiswa.php';
$mhs = new mahasiswa();

extract($_POST);
$aksi = $_GET['aksi'];

if($aksi == "tambah"){
$mhs->input($nim,$nama,$alamat); 
header("location:index.php?mn=tm");
}

else if($aksi == "hapus"){
$mhs->hapus($_GET['nim']); 
header("location:index.php?mn=tm");
}

else if($aksi == "update"){
$mhs->update($nim,$nama,$alamat); 
header("location:index.php?mn=tm");
}
?>
