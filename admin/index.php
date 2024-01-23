<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
  
		<div class="row">
			<div class="col-md-12">	
				  <div class="carousel" id="contoh-carousel" data-ride="carousel">
						<ol class="carousel-indicators">
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="../produk/banner5.jpg" alt="Keterangan Gambar satu">
								<div class="carousel-caption">
								<h1>SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h1>
									<h2>Ini Adalah Halaman Utama Website Admin Untuk Melihat Data Pada Shelly Fashion Store</h2>
									<p><a class="btn btn-danger btn-lg" href="tampil-pembeli.php" role="button">Data Pembeli</a>
									<a class="btn btn-info btn-lg" href="tampil-user.php" role="button">User</a>  
								</div>
							</div>
						<a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
							<span class="sr-only">Prev</span>
						</a>
						<a class="right carousel-control" href="#contoh-carousel" role="button">
							<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
			</div>
		</div>
	</div>
</div>
</div><!-- Akhir Jumbotron -->
<br><br>
<?php include "footer.php";?>