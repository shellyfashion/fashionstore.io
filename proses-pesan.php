<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id_barang=$_POST['id_barang'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no_hp=$_POST['no_hp'];
$nama_barang=$_POST['nama_barang'];
$harga_barang=$_POST['harga_barang'];

include "koneksi.php";

$simpan=$koneksi->query("insert into pesanan(id_barang,nama,alamat,no_hp,nama_barang,harga_barang) 
                        values ('$id_barang', '$nama', '$alamat', '$no_hp', '$nama_barang', '$harga_barang')");

if($simpan==true){

    header("location:pesan.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>