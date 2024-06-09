<html>
<body>
    <form method="post">
        <table border="1">
            <tr>
                <td>Kategori</td>
                <td>
                    <select name="kategori">
                        <?php
                            include "koneksi.php";
                            $tampil=mysqli_query($c, "SELECT * FROM tb_kategori");
                            $jml=mysqli_num_rows($tampil);
                            if($jml > 0) {
                                echo "<option value=$r[id_kategori]>$r [kategori]</option>";
                            }else{
                                echo "<option value=->--Tidak Ada--</option>";
                            }
                        ?>
                        </select>
                    </td>
                </tr>
            </table>
        </form>
</body>
</html>