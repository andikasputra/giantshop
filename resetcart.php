<?php
session_start();
unset($_SESSION['jmlbarang']);
unset($_SESSION['index']);
unset($_SESSION['total']);
header("location: shopcart.php");
?>