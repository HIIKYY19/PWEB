<?php 
extract($_GET); 
if(isset($mn))
{
    if($mn=="tm") include "tampil_mahasiswa.php";
    else if($mn=="pm") include "proses_mahasiswa.php";
    else if($mn=="im") include "input_mahasiswa.php";
    else if($mn=="em") include "edit_mahasiswa.php";
}
?>