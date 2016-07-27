<?php
$q = "DELETE FROM `barang` WHERE kdbarang='$_GET[kd]'";
$sql = mysql_query($q);
if($sql) header('location: ?p=barang');
?>
