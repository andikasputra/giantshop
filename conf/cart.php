<?php
include 'db.php';
session_start();

$_SESSION['jmlbarang'] = $_SESSION['index']+1;
$_SESSION['kdbarang'][$_SESSION['index']] = $_POST['kdbarang'];
$_SESSION['subtotal'][$_SESSION['index']] = $_POST['harga'] * $_POST['pesan'];
$_SESSION['pesanan'][$_SESSION['index']] = $_POST['pesan'];


// for($i = 0; $i <= $_SESSION['index']; $i++)
	$_SESSION['total'] += $_SESSION['subtotal'][$_SESSION['index']];

$_SESSION['index']++;

?>
<script type="text/javascript">
alert("Barang telah berhasil dimasukkan ke keranjang belanja");
window.location.assign("../produk.php?kd=<?php echo $_POST['kdbarang'] ?>");
</script>