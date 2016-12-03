<?php include 'assets/php/header.php'; ?>

		<div class="shopcart">

        	<div class="title">

        		<div class="container">

        			<h4>barang yang anda beli</h4>

        		</div>

        	</div>

        	<div class="container">

        		<div class="row">

        			<div class="col-md-12">

                        <table class="table table-striped table-bordered">

                            <tr>
                                <th width="8">No</th>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga Satuan</th>
                                <th>Jumlah Barang</th>
                                <th>Subtotal</th>
                            </tr>

                        <?php
                        for ($i=0; $i < $_SESSION['index']; $i++) { 
                            $kdbarang = $_SESSION['kdbarang'][$i];
                            $q = "SELECT kdbarang, nmbarang, nmjenis, nmmerk, nmsupplier, harga, stok, foto, deskripsi, jenis.kdjenis FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis JOIN merk ON merk.kdmerk=barang.kdmerk JOIN supplier ON barang.kdsupplier=supplier.kdsupplier WHERE kdbarang='$kdbarang'";
                            $sql = mysqli_query($conn, $q);
                            $res = mysqli_fetch_array($sql);?>

                            <tr>
                                <td><?php echo $i+1; ?></td>
                                <td><?php echo $_SESSION['kdbarang'][$i]; ?></td>
                                <td><?php echo $res[1]; ?></td>
                                <td><?php echo $res[5]; ?></td>
                                <td><?php echo $_SESSION['pesanan'][$i]; ?></td>
                                <td align="right"><?php echo $_SESSION['subtotal'][$i]; ?></td>
                            </tr>

                        <?php
                        }
                        ?>
                        
                        <tr>
                            <td colspan=5>Total yang harus dibayar</td>
                            <td align="right"><?php echo $_SESSION['total'] ?></td>
                        </tr>
                        
                        </table>

                        <div class="aksi">

                            <a href="" class="beli-btn" data-toggle="modal" data-target="#checkout">Beli Barang</a><br /><br />
                            <a onclick="return confirm('Ciyus mau ngosongin keranjang belanja?')" href="resetcart.php" class="kosong-btn">Kosongkan Keranjang</a>

                        </div>

                    </div>

        		</div>

        	</div>

        </div>

<?php include 'assets/php/footer.php'; ?>