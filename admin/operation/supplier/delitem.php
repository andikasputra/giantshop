<?php
$q = "DELETE FROM `supplier` WHERE kdsupplier='$_GET[kd]'";
$sql = mysqli_query($conn, $q) or die(mysqli_error($conn));
if($sql) header('location: ?p=supplier');
?>
