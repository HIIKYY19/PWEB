<?php
    include "koneksi.php";
    extract($_GET);
    $sql=mysqli_query($c,"select * from tbl_spesialis 
    where id_spesialis= '$kode' ");
    $row=mysqli_fetch_array($sql)
?>
<html>
<body>
    <FORM METHOD="Post">
    <TABLE BORDER="1" align="center">
        <tr>
        <td>ID</td>
        <td><input type="text" name="id" readonly value="<?php echo "$row[id_spesialis]"; ?>"></td>
        </tr>
        <tr>
        <td>NAMA</td>
        <td><input type="text" name="nama"
            value="<?php echo "$row[nm_spesialis]";?>"></td>
        </tr>
        <tr>
        <td>GELAR</td>
        <td><input type="text" name="nama"
            value="<?php echo "$row[gelar]";?>"></td>
        </tr>
        <tr>
        <td colspan="2">
            <input type="submit" name="update" value="UPDATE">
            <input type="reset" name="batal" value="BATAL">
        </td>
        </tr>
    </table>
</body>
</html>
<?php
    extract($_POST);
    if(isset($update))
    {
        $query=mysqli_query($c,"update tbl_spesialis
            SET nm_spesialis='$nama', gelar='$gelar'
            WHERE id_spesialis='$id'");
        if($query)
            echo"Berhasil Diupdate";
        else
            echo"Gagal Diupdate";
    }