<?php
require_once 'assets/php/header.php';
?>
<div class="kategori">

	<div class="title">

		<div class="container">
			<h4>detail transaksi</h4>
		</div>

	</div>

	<div class="container">

		<div class="row">

			<div class="col-xs-12">

			<?php
			if(isset($_GET['kd'])){
				$q = "SELECT nama, T.email, notelp, T.alamat FROM user U JOIN trx T ON U.email=T.email WHERE kdtrx='$_GET[kd]'";
				$sql = mysql_query($q);
				$r = mysql_fetch_array($sql);?>
				<div class="row">

					<div class="col-md-5 col-sm-6">

						<table align='left' class="table data table-striped table-bordered">
							<tr>
								<td>Kode Transaksi</td>
								<td>: <?php echo $_GET['kd']; ?></td>
							</tr>
							<tr>
								<td>Nama Pembeli</td>
								<td>: <?php echo $r[0]; ?></td>
							</tr>
							<tr>
								<td>Email</td>
								<td>: <?php echo $r[1]; ?></td>
							</tr>
							<tr>
								<td>No Telepon</td>
								<td>: <?php echo $r[2]; ?></td>
							</tr>
							<tr>
								<td>Alamat Pengiriman</td>
								<td>: <?php echo $r[3]; ?></td>
							</tr>
						</table>

					</div>

				</div>

				<table class="table table-striped table-bordered ijo">

					<tr>
						<th>No</th>
						<th>Nama Barang</th>
						<th>Harga Satuan</th>
						<th>Jumlah</th>
						<th>Subtotal</th>
					</tr>

				<?php
				$no=1;
				$q = "SELECT nmbarang, B.harga, jml, subtotal FROM detailtrx T JOIN barang B ON B.kdbarang=T.kdbarang WHERE kdtrx='$_GET[kd]'";
				$sql = mysql_query($q);
				while($res = mysql_fetch_array($sql)){?>

				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $res[0]; ?></td>
					<td><?php echo $res[1]; ?></td>
					<td><?php echo $res[2]; ?></td>
					<td align=right><?php echo $res[3]; ?></td>
				</tr>

			<?php
				}
			?>
				<tr>
					<td colspan=4>Total</td>
					<?php $tot = mysql_fetch_array(mysql_query("SELECT SUM(subtotal) FROM detailtrx WHERE kdtrx='$_GET[kd]'")) ?>
					<td align=right><strong><?php echo $tot[0]; ?></strong></td>
				</tr>
				</table>
			<?php
			}
			?>
			</div>

		</div>

	</div>
</div>
<?php
require_once 'assets/php/footer.php';
?>