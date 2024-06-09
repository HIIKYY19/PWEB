<?php
include 'class_mahasiswa.php';
$mhs = new mahasiswa();
?>

<form action="index.php?mn=pm&aksi=update" method="post">
<?php
foreach($mhs->edit($_GET['id']) as $y){
?>
<table>
<tr>
<td>Nama</td>
<td>
<input type="hidden" name="a" value="<?php echo $y['NIM'] ?>">
<input type="text" name="b" value="<?php echo $y['Nama'] ?>">
</td>
</tr>
<tr>
<td>Alamat</td>
<td><input type="text" name="c" value="<?php echo $y['Alamat'] ?>"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Simpan"></td>
</tr>
</table>
<?php } ?>
</form>
