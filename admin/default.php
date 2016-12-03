
    <div class="title">

        <h3>beranda</h3>

    </div>
    <div class="row">

	   	<div class="col-md-8 col-md-offset-2 dashboard">
			<h3>Hallo admin, selamat datang di halaman admin</h3>

			<?php
			$sql = mysqli_query($conn, "SELECT * FROM trx WHERE idstatus=1");
			$c = mysqli_num_rows($sql);
			echo "<h5 class='label label-danger'>Ada ".$c." transaksi belum dikirim.</h5>";
			?>
			<br /><br />
			<a href="index.php?p=transaksi" class="btn btn-primary">LIHAT TRANSAKSI</a>
		</div>
	</div>

	<div class="row">

		<div class="col-md-6">

			<h4>Barang dengan stok terkecil</h4>

			<table cellspacing=0 class="table table-striped table-bordered">
				<tr>
					<th>No</th>
					<th>Kode Barang</th>
					<th>Nama Barang</th>
					<th>Jenis</th>
					<th>Stok</th>
				</tr>
			<?php
			$q = "SELECT kdbarang, nmbarang, nmjenis, stok FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis JOIN supplier ON barang.kdsupplier=supplier.kdsupplier ORDER BY stok ASC LIMIT 0,5";
			$sql = mysqli_query($conn, $q);
			$no = 1;
			while($res = mysqli_fetch_array($sql)){?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $res[0]; ?></td>
					<td><?php echo $res[1]; ?></td>
					<td><?php echo $res[2]; ?></td>
					<td><?php echo $res[3]; ?></td>
					
				</tr>
			<?php
				$no++;
			}
			?>
			</table>

		</div>

		<div class="col-md-6">
			<h4>Komentar terbaru</h4>
			<table cellspacing=0 class="table table-striped table-bordered">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Barang</th>
					<th>Tanggal</th>
				</tr>
			<?php
			$q = "SELECT nama, nmbarang, tgl FROM user U JOIN komentar K ON U.email=K.email JOIN barang B ON B.kdbarang=K.kdbarang ORDER BY tgl DESC LIMIT 0,5";
			$sql = mysqli_query($conn, $q);
			$no = 1;
			while($res = mysqli_fetch_array($sql)){?>
				<tr>
					<td><?php echo $no; ?></td>
					<td><?php echo $res[0]; ?></td>
					<td><?php echo $res[1]; ?></td>
					<td><?php echo $res[2]; ?></td>
				</tr>
			<?php
				$no++;
			}
			?>
			</table>

		</div>

	</div>

