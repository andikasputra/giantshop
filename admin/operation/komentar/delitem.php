<?php
$q = "DELETE FROM `komentar` WHERE idkomentar='$_GET[kd]'";
$sql = mysqli_query($conn, $q) or die(mysqli_error($conn));
if($sql) header('location: ?p=komentar');
?>
