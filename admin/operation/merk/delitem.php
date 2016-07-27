<?php
$q = "DELETE FROM `merk` WHERE kdmerk='$_GET[kd]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql) header('location: ?p=merk');
?>
