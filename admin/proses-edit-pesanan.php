<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['id_barang'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$nama_barang=$_POST['nama_barang'];
$harga_barang=$_POST['harga_barang'];

$ubah=$koneksi->query("update pesanan set id_barang='$id_barang', nama='$nama', alamat='$alamat', no_hp='$no_hp', nama_barang='$nama_barang', harga_barang='$harga_barang' where id_barang='$id'");

if($ubah==true){

    header("location:tampil-pesanan.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>