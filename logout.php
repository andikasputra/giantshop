<?php
session_start();
unset($_SESSION['loginNama']);
unset($_SESSION['loginEmail']);
header('location: index.php');
?>