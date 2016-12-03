<?php
    include 'conf/db.php';
    session_start();
    // session_destroy();
    if(empty($_SESSION['index']))
        $_SESSION['index'] = 0;
    if(empty($_SESSION['total']))
        $_SESSION['total'] = 0;
    if(empty($_SESSION['jmlbarang']))
        $_SESSION['jmlbarang'] = 0;

    if (isset($_POST['daftar']) OR isset($_POST['masuk'])) {
        # code...
        include 'register-login-process.php';
    }
?>
<!DOCTYPE html>
<html lang="id">

	<head>

	    <meta charset="utf-8" />
	    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
	    <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="shortcut icon" type="image" href="assets/img/favicon.jpg" />

	    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css" />
	    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
	    <link rel="stylesheet" type="text/css" href="assets/css/front.css" />

	    <title>GiantShop</title>

	</head>

	<body>

		<header class="header">

			<div class="container">

				<div class="row">

					<div class="col-md-4">

						<a href="index.php"><h1 class="webtitle">Giantshop</h1></a>

					</div>

					<div class="col-md-7 col-md-offset-1">

						<div class="row">

							<div class="col-xs-8">
								<form method="get" action="search.php">
									<div class="input-group">
									
  										<input type="search" name="q" placeholder="Cari" class="form-control">
  										<span class="input-group-addon"><i class="fa fa-search"></i></span>
  									
									</div>
								</form>

							</div>

							<div class="col-xs-4 cart">

								<span class="fa fa-shopping-cart"></span>
								<a href="shopcart.php">rp <?php echo $_SESSION['total']; ?></a>

							</div>

						</div>

					</div>

				</div>

			</div>

		</header>

		<nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
			<?php
			$qk = "SELECT * FROM `jenis` ORDER BY nmjenis ASC";
			$sqlk = mysqli_query($conn, $qk);
			while($resk = mysqli_fetch_array($sqlk)){ ?>

                        <li><a href="kategori.php?k=<?php echo $resk[0] ?>"><?php echo $resk[1] ?></a></li>

			
			<?php
			}
			?>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(!isset($_SESSION['loginNama'])){ ?>
                        <li><a href="" data-toggle="modal" data-target="#daftar">Daftar</a></li>
                        <li><a href="" data-toggle="modal" data-target="#masuk">Masuk</a></li>
                        <?php
                        }else {  ?>
                        <li><a href="profile.php"><strong><?php echo $_SESSION['loginNama'] ?></strong></a></li>
                        <li><a href="logout.php" onclick="return confirm('Anda yakin mau keluar?')">Keluar</a></li>
                        <?php
                        }
                        ?>                        
                    </ul>
                </div><!-- /.navbar-collapse -->

            </div><!-- /.container-fluid -->
        </nav>