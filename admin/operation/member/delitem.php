<?php
$q = "DELETE FROM `user` WHERE kdjenis='$_GET[kd]'";
$sql = mysqli_query($conn, $q) or die(mysqli_error($conn));
if($sql) header('location: ?p=member');
?>
