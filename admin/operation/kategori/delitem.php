<?php
$q = "DELETE FROM `jenis` WHERE kdjenis='$_GET[kd]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql) header('location: ?p=kategori');
?>
