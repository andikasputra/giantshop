<?php
$q = "DELETE FROM `merk` WHERE kdmerk='$_GET[kd]'";
$sql = mysqli_query($conn, $q) or die(mysqli_error($conn));
if($sql) header('location: ?p=merk');
?>
