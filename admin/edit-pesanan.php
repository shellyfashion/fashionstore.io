<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-edit-pesanan.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pesanan where id_barang='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="id_barang">id_barang</label>
                        <input type="hidden" name="id_barang" value="<?php echo $row['id_barang']?>" class="form-control">
                        <input type="number" name="id_barang" value="<?php echo $row['id_barang']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">NAMA</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <input type="text" name="alamat" value="<?php echo $row['alamat']?>" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="no_hp">No HP</label>
                        <input type="hidden" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                        <input type="number" name="no_hp" value="<?php echo $row['no_hp']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama_barang">NAMA BARANG</label>
                        <input type="text" name="nama_barang" value="<?php echo $row['nama_barang']?>" class="form-control">
                    </div>

                    <div class="form-group">
                    <label for="harga_barang">Harga_barang</label>
                        <input type="hidden" name="harga_barang" value="<?php echo $row['harga_barang']?>" class="form-control">
                        <input type="number" name="harga_barang" value="<?php echo $row['harga_barang']?>" class="form-control">
                    </div>
                    <br>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>