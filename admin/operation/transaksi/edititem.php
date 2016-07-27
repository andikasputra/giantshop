<?php
if(isset($_GET['kd'])){
    $q = "UPDATE `trx` SET idstatus='2', tglkirim=now() WHERE kdtrx='$_GET[kd]'";
    $sql = mysql_query($q);
    if($sql){ ?>
    	<script type="text/javascript">
    	alert("status telah dikirim");
    	window.location.assign('index.php?p=transaksi');
    	</script>
    <?php
    }
}
?>