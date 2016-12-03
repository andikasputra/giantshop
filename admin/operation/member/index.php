<div class="title">

	<h3>member</h3>

</div>
<table cellspacing=0 class="table table-striped table-bordered">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Email</th>
		<th>No Telp</th>
		<th>Alamat</th>
		<th>Aksi</th>
	</tr>
<?php
$q = "SELECT * FROM `user` ORDER BY 'nama' ASC";
$sql = mysqli_query($conn, $q);
$no = 1;
while($res = mysqli_fetch_array($sql)){?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $res[2]; ?></td>
		<td><?php echo $res[0]; ?></td>
		<td><?php echo $res[3]; ?></td>
		<td><?php echo $res[4]; ?></td>
		<td align="center">
			<a href="?p=hapusmember&kd=<?php echo $res[0]; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus ini?')"><i class="fa fa-trash"></i> Hapus</a>
		</td>
	</tr>
<?php
	$no++;
}
?>
</table>