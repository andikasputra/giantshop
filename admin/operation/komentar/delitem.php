<?php
$q = "DELETE FROM `komentar` WHERE idkomentar='$_GET[kd]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql) header('location: ?p=komentar');
?>
