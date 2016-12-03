<div class="title">

	<h3>komentar</h3>

</div>
<table cellspacing=0 class="table table-striped table-bordered">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Barang</th>
		<th>Tanggal</th>
		<th>Komentar</th>
		<th>Aksi</th>
	</tr>
<?php
$q = "SELECT nama, nmbarang, tgl, isikomentar, idkomentar FROM user U JOIN komentar K ON U.email=K.email JOIN barang B ON B.kdbarang=K.kdbarang ORDER BY tgl DESC";
$sql = mysqli_query($conn, $q);
$no = 1;
while($res = mysqli_fetch_array($sql)){?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $res[0]; ?></td>
		<td><?php echo $res[1]; ?></td>
		<td><?php echo $res[2]; ?></td>
		<td><?php echo $res[3]; ?></td>
		<td align="center">
			<a href="?p=hapuskomentar&kd=<?php echo $res[4]; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus ini?')"><i class="fa fa-trash"></i> Hapus</a>
		</td>
	</tr>
<?php
	$no++;
}
?>
</table>