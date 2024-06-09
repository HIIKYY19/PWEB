<?php
$host="localhost";
$user="root";
$pass="";
$database="db_kasir";
$c=mysqli_connect($host,$user,$pass,$database);
if(mysqli_connect_error()) {
   trigger_error ("koneksi ke Database Gagal:" .mysqli_connect_error(), E_USER_ERROR);
}
?>