<?php include "header.php"; ?>

<h3> Upload Foto </h3>

<form action="" method="POST" enctype="multipart/form-data">
    <b> File upload </b> <input type="file" name="NamaFile">
    <input type="submit" name="proses" value="Upload">
</form>

<?php
$koneksi = mysqli_connect("localhost", "root", "20112011", "tugas_uas");

if(isset($_POST['proses']));{

$direktori = "produk/";
$file_name=$_FILES['NameFile']['name'];
move_uploaded_file($_FILES['NameFile']['tmp_name'],$direktori.$file_name);

$simpan=$koneksi->query("insert into foto(id,file) 
                        values ('$id', '$file')");

echo "<b>Foto berhasil diupload";
}

