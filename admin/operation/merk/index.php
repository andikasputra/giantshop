<div class="title">

	<h3>merk</h3>
	<a href="?p=tambahmerk" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Merk</a>

</div>
<table cellspacing=0 class="table table-striped table-bordered">
	<tr>
		<th>No</th>
		<th>Kode Merk</th>
		<th>Nama Merk</th>
		<th>No Telp</th>
		<th>Aksi</th>
	</tr>
<?php
$q = "SELECT * FROM `merk` ORDER BY 'kdmerk' ASC";
$sql = mysql_query($q);
$no = 1;
while($res = mysql_fetch_array($sql)){?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $res[0]; ?></td>
		<td><?php echo $res[1]; ?></td>
		<td><?php echo $res[2]; ?></td>
		<td align="center">
			<a href="?p=hapusmerk&kd=<?php echo $res[0]; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus ini?')"><i class="fa fa-trash"></i> Hapus</a>
			<a href="?p=editmerk&kd=<?php echo $res[0]; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
		</td>
	</tr>
<?php
	$no++;
}
?>
</table>