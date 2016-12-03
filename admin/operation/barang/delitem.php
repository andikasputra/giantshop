<?php
$q = "DELETE FROM `barang` WHERE kdbarang='$_GET[kd]'";
$sql = mysqli_query($conn, $q);
if($sql) header('location: ?p=barang');
?>
