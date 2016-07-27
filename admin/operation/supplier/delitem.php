<?php
$q = "DELETE FROM `supplier` WHERE kdsupplier='$_GET[kd]'";
$sql = mysql_query($q) or die(mysql_error());
if($sql) header('location: ?p=supplier');
?>
