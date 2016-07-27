<?php
$q = "DELETE FROM `user` WHERE kdjenis='$_GET[kd]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql) header('location: ?p=member');
?>
