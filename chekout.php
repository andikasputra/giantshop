<?php
session_start();
include 'conf/db.php';

$mail = $_SESSION['loginEmail'];
$alamat = $_POST['alamatTujuan'];
$qt = "INSERT INTO trx VALUES ('',now(),null,'$mail','$alamat',1)";
$sqlt = mysql_query($qt) or die(mysql_error());
if($sqlt){
    for ($i=0; $i < $_SESSION['index']; $i++) { 
        $pesanan = $_SESSION['pesanan'][$i];
        $kdbarang = $_SESSION['kdbarang'][$i];
        $subtotal = $_SESSION['subtotal'][$i];
        $q_update = "UPDATE barang SET stok=(stok-$pesanan) WHERE kdbarang='$kdbarang'";
        $sql_update = mysql_query($q_update);
        if($sql_update){
            $q_select = "SELECT * FROM trx ORDER BY kdtrx DESC LIMIT 0,1";
            $sql_select = mysql_query($q_select);
            $r_select = mysql_fetch_array($sql_select);
            $kdtrx = $r_select[0];
            $q_detail = "INSERT INTO detailtrx VALUES('$kdtrx','$kdbarang','$pesanan','$subtotal')";
            $sql_detail = mysql_query($q_detail);
        }
 
    }
    unset($_SESSION['index']);
    unset($_SESSION['total']);
    unset($_SESSION['jmlbarang']);
    header('location: profile.php');
    
}

?>