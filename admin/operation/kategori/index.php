<div class="title">

	<h3>kategori</h3>
	<a href="?p=tambahkategori" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Kategori</a>

</div>
<table cellspacing=0 class="table table-striped table-bordered">
	<tr>
		<th>No</th>
		<th>Kode Kategori</th>
		<th>Nama Kategori</th>
		<th>Aksi</th>
	</tr>
<?php
$q = "SELECT * FROM `jenis` ORDER BY 'kdjenis' ASC";
$sql = mysql_query($q);
$no = 1;
while($res = mysql_fetch_array($sql)){?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $res[0]; ?></td>
		<td><?php echo $res[1]; ?></td>
		<td align="center">
			<a href="?p=hapuskategori&kd=<?php echo $res[0]; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus ini?')"><i class="fa fa-trash"></i> Hapus</a>
			<a href="?p=editkategori&kd=<?php echo $res[0]; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
		</td>
	</tr>
<?php
	$no++;
}
?>
</table>