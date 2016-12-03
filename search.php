<?php include 'assets/php/header.php'; ?>

		<div class="kategori">

        	<div class="title">

        		<div class="container">

        			<h4>Hasil pencarian : <?php echo $_GET['q']; ?></h4>

        		</div>

        	</div>

        	<div class="container">

        		<div class="row">

        			<?php
					$q = "SELECT * FROM barang LEFT JOIN jenis ON barang.kdjenis=jenis.kdjenis";
                    $q.= " LEFT JOIN supplier ON barang.kdsupplier=supplier.kdsupplier";
                    $q.= " LEFT JOIN merk ON merk.kdmerk=barang.kdbarang WHERE";
                    $q.= " barang.nmbarang LIKE '%$_GET[q]%' OR jenis.nmjenis LIKE '%$_GET[q]%' OR";
                    $q.= " supplier.nmsupplier LIKE '%$_GET[q]%' OR merk.nmmerk LIKE '%$_GET[q]%' ORDER BY kdbarang ASC";

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