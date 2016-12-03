<div class="title">

	<h3>komentar</h3>

</div>
<table cellspacing=0 class="table table-striped table-bordered">
	<tr>
		<th>No TRX</th>
		<th>Nama</th>
		<th>Tgl TRX</th>
		<th>Tgl Kirim</th>
		<th>Status</th>
		<th>Aksi</th>
	</tr>
<?php
$q = "SELECT kdtrx, nama, tgltrx, tglkirim, nmstatus, T.idstatus FROM user U JOIN trx T ON U.email=T.email JOIN statustransaksi S ON T.idstatus=S.idstatus ORDER BY kdtrx DESC";
$sql = mysqli_query($conn, $q);
$no = 1;
while($res = mysqli_fetch_array($sql)){?>
	<tr>
		<td><?php echo $res[0]; ?></td>
		<td><?php echo $res[1]; ?></td>
		<td><?php echo $res[2]; ?></td>
		<td><?php echo $res[3]; ?></td>
		<td><?php echo $res[4]; ?></td>
		<td align="center">
			<?php
			if($res[5]==2){
			?>
			<a href="?p=edittransaksi&kd=<?php echo $res[0]; ?>" class="btn btn-primary" disabled="disabled"><i class="fa fa-send"></i> Kirim</a>
		<?php } else { ?>
			<a href="?p=edittransaksi&kd=<?php echo $res[0]; ?>" class="btn btn-primary"><i class="fa fa-send"></i> Kirim</a>
			<?php } ?>
			<a href="?p=detailtransaksi&kd=<?php echo $res[0]; ?>" class="btn btn-success"><i class="fa fa-eye"></i> Detail</a>
		</td>
	</tr>
<?php
	$no++;
}
?>
</table>