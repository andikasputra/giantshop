<?php include 'assets/php/header.php'; ?>

		<div class="banner">

        	<div class="container">
        		<div class="row">

        	<?php
        	$q = "SELECT * FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis JOIN supplier ON barang.kdsupplier=supplier.kdsupplier ORDER BY stok DESC LIMIT 0,1";

			$sql = mysql_query($q);
			$res = mysql_fetch_array($sql);
			?>

        		<div class="col-md-5">

        			<img src="assets/prodimgs/<?php echo $res[6] ?>" class="img-responsive" />

        		</div>

        		<div class="col-md-7 banner-text">

        			<h2><?php echo $res[1] ?></h2>

        			<p><?php echo $res[5] ?></p>

        			<a href="produk.php?kd=<?php echo $res[0] ?>">Lihat poduk</a>

        		</div>

        		</div>

        	</div>

        </div>

        <div class="popular">

        	<div class="container">

        		<div class="row">

	        <?php
			$q = "SELECT * FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis JOIN supplier ON barang.kdsupplier=supplier.kdsupplier ORDER BY stok DESC LIMIT 1,4";

			$sql = mysql_query($q);
			while($res = mysql_fetch_array($sql)){ ?>

        		<div class="col-md-3 col-sm-6 popular-container">
        			
        			<div class="row">

        				<div class="col-xs-6">

        					<img src="assets/prodimgs/<?php echo $res[6] ?>" class="img-responsive" />

        				</div>
        				
        				<div class="col-xs-6">

        					<h3><?php echo $res[1] ?></h3>
        					<a href="produk.php?kd=<?php echo $res[0] ?>" class="detail">detail</a>

        				</div>

        			</div>

        		</div>

        	<?php

			}
			?>
			</div>

        	</div>

        </div>

        <div class="terbaru">

        	<div class="title">

        		<div class="container">

        			<h4>barang terbaru</h4>

        		</div>

        	</div>

        	<div class="container">

        		<div class="row">

        			<?php
					$q = "SELECT * FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis JOIN supplier ON barang.kdsupplier=supplier.kdsupplier ORDER BY kdbarang DESC LIMIT 0,12";

					$sql = mysql_query($q);
					while($res = mysql_fetch_array($sql)){ ?>

        			<div class="col-md-4 col-sm-6 item-container">

        				<div class="item-content">

        					<img src="assets/prodimgs/<?php echo $res[6] ?>" class="img-responsive" />

        					<h3><?php echo $res[1] ?></h3>
        					<span class="harga-front"><?php echo $res[7] ?></span>
        					<a href="produk.php?kd=<?php echo $res[0] ?>" class="detail">detail</a>

        				</div>

        			</div>

        			<?php
        			}
        			?>

        		</div>

        	</div>

        </div>

        <div class="testimoni">

			<div class="container">

				<div class="title">

					<h2>Yang mereka katakan</h2>

				</div>

				<div class="row">

					<div class="col-md-6 col-md-offset-3">
						<p>Beginilah kata mereka yang telah menjadi pelanggan kami</p>
					</div>

				</div>

				<div class="row content">

					<div class="col-md-6 isi-testimoni">

						<div class="row">

							<div class="col-sm-4 col-xs-6">

								<div class="image">

									<img src="assets/img/andika.jpg" class="img-responsive" />

								</div>

							</div>

							<div class="col-sm-8 col-xs-6">

								<p>"Barangnya keren, responnya cepet dan pastinya recommended buat oran lain. Gak akan nyesel beli barang online di sini"</p>

								<h5>Andika Saputra</h5>
								<h6>Mahasiswa</h6>

							</div>

						</div>

					</div>

					<div class="col-md-6 isi-testimoni">

						<div class="row">

							<div class="col-sm-4 col-xs-6">

								<div class="image">

									<img src="assets/img/cita.jpg" class="img-responsive" />

								</div>

							</div>

							<div class="col-sm-8 col-xs-6">

								<p>"Adminnya nggak lola, dalam artian dia jawab klo ada keluhan itu cepet, apalagi di facebook dan twitter. Recommended deh"</p>

								<h5>Cita Citata</h5>
								<h6>Penyanyi</h6>

							</div>

						</div>

					</div>

					<div class="col-md-6 isi-testimoni">

						<div class="row">

							<div class="col-sm-4 col-xs-6">

								<div class="image">

									<img src="assets/img/jokowi.jpg" class="img-responsive" />

								</div>

							</div>

							<div class="col-sm-8 col-xs-6">

								<p>"Kualitas barang yang dijual bagus banget, barang dan pelayanan memuaskan, webnya juga mudah."</p>

								<h5>Joko Widodo</h5>
								<h6>Presiden RI</h6>

							</div>

						</div>

					</div>

					<div class="col-md-6 isi-testimoni">

						<div class="row">

							<div class="col-sm-4 col-xs-6">

								<div class="image">

									<img src="assets/img/emiliyana.jpg" class="img-responsive" />

								</div>

							</div>

							<div class="col-sm-8 col-xs-6">

								<p>"Menurut saya pengiriman barang yang cepet itulah yang menjadikan giantshop istimewa."</p>

								<h5>Emiliyana</h5>
								<h6>Mahasiswa</h6>

							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

        <div class="contact">

			<div class="container">

				<div class="title">

					<h2>hubungi kami</h2>

				</div>

				<div class="row">

					<div class="col-md-6 col-md-offset-3">
						<p>Ingin tahu lebih lanjut? Silahkan hubungi kami melalui form di bawah ini</p>
					</div>

				</div>

				<div class="row content">

					<div class="col-md-8 col-md-offset-2">

					<form>

						<div class="row">

							<div class="col-md-6">

								<div class="input-group">
				  					<span class="input-group-addon"><i class="fa fa-user"></i></span>
				  					<input type="text" class="form-control" name="nama" placeholder="Nama Anda">
								</div>

							</div>

							<div class="col-md-6">

								<div class="input-group">
				  					<span class="input-group-addon"><i class="fa fa-envelope"></i></span>
				  					<input type="text" class="form-control" name="email" placeholder="Email Anda">
								</div>

							</div>

						</div>

						<div class="row">

							<div class="col-md-12">

								<textarea class="form-control" name="pesan" rows="5" placeholder="Pesan Anda"></textarea>

								<button type="submit" class="kirim-pesan">Kirim Pesan</button>

							</div>

						</div>

					</form>

					</div>

				</div>

			</div>

		</div>
		<?php include 'assets/php/footer.php'; ?>