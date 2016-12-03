<?php
require_once 'assets/php/header.php';


    if(isset($_POST['kirimkomentar']))
        require_once 'assets/php/proses-komentar.php';

	$q = "SELECT kdbarang, nmbarang, nmjenis, nmmerk, nmsupplier, harga, stok, foto, deskripsi, jenis.kdjenis FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis JOIN merk ON merk.kdmerk=barang.kdmerk JOIN supplier ON barang.kdsupplier=supplier.kdsupplier WHERE kdbarang='$_GET[kd]'";
	$sql = mysqli_query($conn, $q);
	$res = mysqli_fetch_array($sql);

?>

		<div class="produk">

			<div class="container">

				<div class="row">

					<div class="col-md-8">

						<main class="detail-produk">

							<ol class="breadcrumb">
								<li><a href="index.php">Beranda</a></li>
                                <li><a href="kategori.php?k=<?php echo $res[9]; ?>"><?php echo $res[2]; ?></a></li>
                                <li><a href="#"><?php echo $res[3]; ?></a></li>
                                <li class="active"><?php echo $res[1]; ?></li>
							</ol>

							<h2><?php echo $res[1]; ?></h2>

							<div class="row">
                                
                                <div class="col-md-8">
                                
                                    <img src="assets/prodimgs/<?php echo $res[7]; ?>" class="img-responsive" />
                                    
                                </div>
                                    
                                <div class="col-md-4">
                                    
                                    <h4>INFORMASI PEMESANAN</h4><br />
                                        
                                    <form role="form" name="cart-form" method="post" action="conf/cart.php" class="form-horizontal">

					                    <div class="form-group">
                                            <input type="hidden" name="kdbarang" value="<?php echo $res[0]; ?>" />
                                                
                                            <label class="col-xs-6 col-md-5 control-label">Harga </label>
                                            <div class="col-md-6 col-xs-6">
                                                <input class="form-control" id="harga" value="<?php echo $res[5]; ?>" type="text" name="harga" readonly />
                                            </div>
                                            
                                        </div>
                                            
                                        <div class="form-group">
                                                
                                            <label class="col-xs-6 col-md-5 control-label">Stok : </label>
                                            <div class="col-md-6 col-xs-6">
                                                <input class="form-control" value="<?php echo $res[6]; ?>" type="text" name="stok" readonly />
                                            </div>
                                            
                                        </div>
                                        
                                        <div class="form-group">
                                                    
                                            <label class="col-xs-6 col-md-5 control-label">Pesan : </label>
                                            <div class="col-md-6 col-xs-6">
                                                <input class="form-control" id="pesan" type="number" max="<?php echo $res[6]; ?>" min="1" name="pesan" required />
                                            </div>
                                            
                                        </div>
                                        <div class="form-group">
                                                    
                                            <label class="col-xs-6 col-md-5 control-label">Subtotal : </label>
                                            <div class="col-md-6 col-xs-6">
                                                <input class="form-control" type="text" id="subtotal" name="subtotal" readonly />
                                            </div>
                                            
                                        </div>
                                            
                                        <button type="submit" name="submit" class="btn btn-primary form-control">Tambah ke keranjang</button>
                                                                                       
                                    </form>
                                        
                                </div>
                                
                            </div>

                            <div class="row">
                                
                                <div class="col-md-12">
                                
                                    <p>
                                    	<?php echo $res[8]; ?>
                                    </p>
                                    
                                </div>
                                
                            </div>

						</main>

						<div class="comment-produk">

							<div class="title">

								<h4>komentar</h4>

							</div>

							<?php require_once 'assets/php/komentar.php'; ?>

						</div>

					</div>

					<aside class="col-md-4 lainnya">

						<div class="title">

							<h4>produk lainnya</h4>

						</div>

						<div class="lainnya-container">

							<div class="row">

								<?php
								$ql = "SELECT kdbarang, nmbarang, harga, foto FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis WHERE barang.kdjenis='$res[9]' AND barang.kdbarang != '$res[0]' LIMIT 0,2";
								$sqll = mysqli_query($conn, $ql);

								while($resl = mysqli_fetch_array($sqll)){
								?>

								<div class="col-md-6 col-sm-6 popular-container">
	        			
				        			<div class="row">

				        				<div class="col-xs-6">

				        					<img src="assets/prodimgs/<?php echo $resl[3] ?>" class="img-responsive" />

				        				</div>
				        				
				        				<div class="col-xs-6">

				        					<h3><?php echo $resl[1] ?></h3>
				        					<a href="produk.php?kd=<?php echo $resl[0] ?>" class="detail">detail</a>

				        				</div>

				        			</div>

				        		</div>

								<?php
								}
								?>

							</div>

							<div class="row">

								<?php
								$ql = "SELECT kdbarang, nmbarang, harga, foto FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis WHERE barang.kdjenis='$res[9]' AND barang.kdbarang != '$res[0]' LIMIT 2,2";
								$sqll = mysqli_query($conn, $ql);

								while($resl = mysqli_fetch_array($sqll)){
								?>

								<div class="col-md-6 col-sm-6 popular-container">
	        			
				        			<div class="row">

				        				<div class="col-xs-6">

				        					<img src="assets/prodimgs/<?php echo $resl[3] ?>" class="img-responsive" />

				        				</div>
				        				
				        				<div class="col-xs-6">

				        					<h3><?php echo $resl[1] ?></h3>
				        					<a href="produk.php?kd=<?php echo $resl[0] ?>" class="detail">detail</a>

				        				</div>

				        			</div>

				        		</div>

								<?php
								}
								?>

							</div>

							<div class="row">

								<?php
								$ql = "SELECT kdbarang, nmbarang, harga, foto FROM barang JOIN jenis ON barang.kdjenis=jenis.kdjenis WHERE barang.kdjenis='$res[9]' AND barang.kdbarang != '$res[0]' LIMIT 4,2";
								$sqll = mysqli_query($conn, $ql);

								while($resl = mysqli_fetch_array($sqll)){
								?>

								<div class="col-md-6 col-sm-6 popular-container">
	        			
				        			<div class="row">

				        				<div class="col-xs-6">

				        					<img src="assets/prodimgs/<?php echo $resl[3] ?>" class="img-responsive" />

				        				</div>
				        				
				        				<div class="col-xs-6">

				        					<h3><?php echo $resl[1] ?></h3>
				        					<a href="produk.php?kd=<?php echo $resl[0] ?>" class="detail">detail</a>

				        				</div>

				        			</div>

				        		</div>

								<?php
								}
								?>

							</div>

						</div>

					</aside>

				</div>

			</div>

		</div>

<?php
require_once 'assets/php/footer.php';
?>