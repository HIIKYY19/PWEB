<?php
include 'class_mahasiswa.php';
$mhs = new mahasiswa();
?>
<a href="index.php?mn=im">+ Input Data</a>
<table border="1">
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Opsi</th>
    </tr>

    <?php
    $no = 1;
    foreach($mhs->tampil_data() as $x){
    //	foreach ($mysqli->get_show() as $x) {
    ?>

    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $x['NIM']; ?></td>
        <td><?php echo $x['NAMA']; ?></td>
        <td><?php echo $x['ALAMAT']; ?></td>
        <td>
            <a href="index.php?mn=em&id=<?php echo $x['NIM'];?>&aksi=edit">Edit</a>
            <a href="index.php?mn=pm&id=<?php echo $x['NIM']; ?>&aksi=hapus">Hapus</a>
        
        </td>
    </tr>
    <?php
    }
    ?>
</table>