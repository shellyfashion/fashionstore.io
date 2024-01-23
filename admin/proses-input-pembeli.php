<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$user_id=$_POST['user_id'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into data_pembeli(user_id,nama,jenis_kelamin,alamat,no_hp) 
                        values ('$user_id', '$nama', '$jenis_kelamin', '$alamat', '$no_hp')");

if($simpan==true){

    header("location:tampil-pembeli.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>