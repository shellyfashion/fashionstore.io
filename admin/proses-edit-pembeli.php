<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['user_id'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];

$ubah=$koneksi->query("update data_pembeli set user_id='$user_id', nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_hp='$no_hp' where user_id='$id'");

if($ubah==true){

    header("location:tampil-pembeli.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>