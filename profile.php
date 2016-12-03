<?php include 'assets/php/header.php'; 
if(!isset($_SESSION['loginEmail'])) header('location: index.php');
?>
		<div class="shopcart">

        	<div class="title">

        		<div class="container">

        			<h4>daftar transaksi yang pernah anda lakukan</h4>

        		</div>

        	</div>

        	<div class="container">

        		<div class="row">

        			<div class="col-md-12">

                        <table class="table table-striped table-bordered">

                            <tr>
                                <th width="8">No</th>
                                <th>No Transaksi</th>
                                <th>Tanggal Transaksi</th>
                                <th>Total Tagihan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>

                        <?php
                            $q = "SELECT trx.kdtrx, tgltrx, sum(subtotal), nmstatus FROM trx JOIN detailtrx ON trx.kdtrx=detailtrx.kdtrx JOIN statustransaksi ON statustransaksi.idstatus=trx.idstatus WHERE trx.email='$_SESSION[loginEmail]' GROUP BY trx.kdtrx, tgltrx, nmstatus";
                            $sql = mysqli_query($conn, $q);
                            $i=1;
                            while($res = mysqli_fetch_array($sql)){ ?>

                            <tr>
                                <td><?php echo $i++; ?></td>
                                <td><?php echo $res[0]; ?></td>
                                <td><?php echo $res[1]; ?></td>
                                <td><?php echo $res[2]; ?></td>
                                <td><?php echo $res[3]; ?></td>
                                <td><a href="detail.php?kd=<?php echo $res[0]; ?>" class="btn btn-primary btn-sm"><i class="fa fa-file-text"></i> Detail</a></td>
                            </tr>

                            <?php
                            }
                            ?>
                        
                        </table>

                    </div>

        		</div>

        	</div>

        </div>
<?php include 'assets/php/footer.php'; 
?>