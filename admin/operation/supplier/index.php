<div class="title">

	<h3>supplier</h3>
	<a href="?p=tambahsupplier" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Supplier</a>

</div>
<table cellspacing=0 class="table table-striped table-bordered">
	<tr>
		<th>No</th>
		<th>Kode Supplier</th>
		<th>Nama Supplier</th>
		<th>Alamat</th>
		<th>No Telp</th>
		<th>Email</th>
		<th>Aksi</th>
	</tr>
<?php
$q = "SELECT * FROM `supplier` ORDER BY 'kdsupplier' ASC";
$sql = mysql_query($q);
$no = 1;
while($res = mysql_fetch_array($sql)){?>
	<tr>
		<td><?php echo $no; ?></td>
		<td><?php echo $res[0]; ?></td>
		<td><?php echo $res[1]; ?></td>
		<td><?php echo $res[2]; ?></td>
		<td><?php echo $res[3]; ?></td>
		<td><?php echo $res[4]; ?></td>
		<td align="center">
			<a href="?p=hapussupplier&kd=<?php echo $res[0]; ?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus ini?')"><i class="fa fa-trash"></i> Hapus</a>
			<a href="?p=editsupplier&kd=<?php echo $res[0]; ?>" class="btn btn-primary"><i class="fa fa-edit"></i> Edit</a>
		</td>
	</tr>
<?php
	$no++;
}
?>
</table>