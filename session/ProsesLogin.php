<?php
session_start();
$_SESSION['nama_admin'] = NULL;
extract($_POST);
include "koneksi.php";
    $pass=md5($password);
    $qry = mysqli_query($c, "SELECT FROM tbl_admin WHERE username = '$username' AND password= '$pass'"); 
    $jum = mysqli_num_rows($qry);

    if ($jum == 1)
    {
        $data_admin = mysqli_fetch_array($qry);
        $_SESSION['nama_admin'] = $data_admin['nm_admin']; 
        $_SESSION['level'] = $data_admin["level"];
        echo "<script>alert('Anda berhasil Log In');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php'>";
    }
    else
    {
        echo "<meta http-equiv='refresh' content='0; url=login.php'>"; 
        echo "<script>alert('Anda Gagal Log In');</script>";
    }
?>