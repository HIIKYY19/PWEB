<?php
include "koneksi.php";

extract($_POST);
    $tampil=mysqli_query($c, "SELECT * FROM tbl_kategori WHERE id_kategori='$id'");
    $jml=mysqli_num_rows($tampil);
    if($jml > 0) {
        $r=mysqli_fetch_array($tampil); 
        echo "$r[kategori]";
    }else{
        echo "data tidak ada.-.-";
    }
    ?>