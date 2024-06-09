<!DOCTYPE html>
<body>
    <form method="post">
        <center><h2>INPUT DATA SPESIALIS</h2></center>
        <table border="1"align="center">
            <tr>
                <td>Kode</td>
                <td><input types="text"name="id"></td>
            </tr>
            <tr>
                <td>spesialis</td>
                <td><input type="text"name="nama"></td>
            </tr>
            <td>Gelar</td>
            <td><input type="text"name="gelar"></td>
        </tr>
        <tr>
            <td colspans="2">
                <input type="submit"name="simpan"value="SIMPAN">
                <input types="reset"name="batal"value="BATAL">
            </td>
        </tr>
    </table>
</form>
<body>
<html>
<?php
extract($_POST);
if(isset($simpan)){
    include"koneksi.php";
    $sql=mysqli_query($c,"insert into tbl_spesialis values('$id','$nama','$gelar')");
    if($sql)
        echo"Data Berhasil Disimpan";
    else
        echo"Data Gagal Disimpan";
}
?>