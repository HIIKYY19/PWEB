<?php
    include "koneksi.php";
    extract($_GET);
    if(isset($kode))
    {
        $sql=mysqli_query($c,"delete from tbl_spesialis 
        where id_spesialis='kode'");
        if($sql)
            echo "Berhasil Dihapus";
        else
            echo "Gagal Dihapus";
    }
?>
