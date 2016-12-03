<?php include 'assets/php/header.php'; ?>

		<div class="kategori">

        	<div class="title">

        		<div class="container">

        			<?php
                    $r = mysqli_fetch_array(mysqli_query($conn, "SELECT nmjenis FROM jenis WHERE kdjenis='$_GET[k]'"));
                        echo '<h4>kategori : '.$r[0].'</h4>';
                    ?>

        		</div>

        	</div>

        	<div class="container">

        		<div class="row">

        			<?php
					$q = "SELECT * FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis JOIN supplier ON barang.kdsupplier=supplier.kdsupplier WHERE jenis.kdjenis='$_GET[k]' ORDER BY kdbarang ASC";

					$sql = mysqli_query($conn, $q);
					while($res = mysqli_fetch_array($sql)){ ?>

        			<div class="col-md-4 col-sm-6 item-container">

        				<div class="item-content">

        					<img src="assets/prodimgs/<?php echo $res[6] ?>" class="img-responsive" />

        					<h3><?php echo $res[1] ?></h3>
        					<span class="harga-front"><?php echo $res[7] ?></span>
        					<a href="produk.php?kd=<?php echo $res[0] ?>" class="detail">detail</a>

        				</div>

        			</div>

        			<?php
        			}
        			?>

        		</div>

        	</div>

        </div>

<?php include 'assets/php/footer.php'; ?>