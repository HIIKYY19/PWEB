<html>
    <body><CENTER>DATA SPESIALIS</CENTER>
    <table border="1" align="center">
        <thead>
            <th>ID</th>
            <th>SPESIALIS</th>
            <th>GELAR</th>
            <th>EDIT</th>
            <th>HAPUS</th>
        </thead>
        <tbody>
            <?php
            include "koneksi.php";
            $sql = mysqli_query($c,"select *from tbl_spesialis");
            while($row = mysqli_fetch_array($sql))
            {
                echo "<tr>
                <td>$row[id_spesialis]</td>
                <td>$row[nm_spesialis]</td>
                <td>$row[gelar]</td>
                <td>
                <a href=edit_spesialis.php?kode=$row[id_spesialis]>EDIT<a>
                </td>
                <td>
                <a href=edit_spesialis.php?kode=$row[id_spesialis]>HAPUS<a>
                </td>
                </tr>";
            }
            ?>
        </tbody>
        </table>
        </body>
</html>
