<?php
$q = "DELETE FROM `jenis` WHERE kdjenis='$_GET[kd]'";
$sql = mysqli_query($conn, $q) or die(mysqli_error($conn));
if($sql) header('location: ?p=kategori');
?>
