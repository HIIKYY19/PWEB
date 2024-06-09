<?php
include 'database.php';
class mahasiswa extends database
{
    
    function construct(){
        //$this->conn = $conn;
        //$this->conn=parent:: construct();
        parent:: construct();
    }

    function tampil_data(){
        //$data = $this->mysqli->query($conn,"select * from tb_mahasiswa");
        $data = $this->mysqli->query("select * from tb_mahasiswa"); 
        while($x = mysqli_fetch_array($data)){
            $hasil[] = $x;
        }
        return $hasil;
    }
    
    function input($nim,$nama,$alamat){
        mysqli_query("insert into tb_mahasiswa values('$nim','$nama','$alamat')");
    }
    
    function hapus($id){
        $this->mysqli->query("delete from tb_mahasiswa where nim='$id'");
    }
    
    function edit($id){
        $data = $this->mysqli->query("select * from tb_mahasiswa where nim='$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[] = $d;
        }
        return $hasil;
    }
    
    function update($id,$nama,$alamat){
        $this->mysqli->query("update tb_mahasiswa set Nama='$nama', Alamat='$alamat' where NIM='$id'");
    }
}
?>
