<?php

if(isset($_POST['daftar'])) {
	# code...
	$pwd = sha1($_POST['password']);
	$qd = "INSERT INTO user VALUES ('$_POST[email]','$pwd','$_POST[nama]','$_POST[notelp]','$_POST[alamat]')";
	$sqld = mysqli_query($conn, $qd);
	if($sqld){ ?>

	<script type="text/javascript">
	alert("Pendaftaran Berhasil. Silahkan Login..!!!");
	</script>

	<?php
	}
}


if(isset($_POST['masuk'])){
	$pwl = sha1($_POST['password']);
	$ql = "SELECT * FROM user WHERE email='$_POST[email]' AND password='$pwl'";
	$sql = mysqli_query($conn, $ql);
	$row = mysqli_num_rows($sql);
	if($row > 0){
		$r = mysqli_fetch_array($sql);
		$_SESSION['loginEmail'] = $r[0];
		$_SESSION['loginNama'] = $r[2];
	}
}
?>