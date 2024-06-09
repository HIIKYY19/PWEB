<?php
 session_start();
 if(isset($_SESSION['nama_admin'])){
?>
Selamat Datang <?php echo $_SESSION['nama_admin']; ?>
<?php
}
else {
 echo "<script>alert('Harus Login Terlebih Dahulu!');</script>";
 echo "<meta http-equiv='refresh' content='0; url=login.php'>";
}
?>
