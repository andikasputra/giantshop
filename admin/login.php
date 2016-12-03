<?php
require_once('../conf/db.php');

session_start();

if (isset($_SESSION['admin'])) {
	header("location: index.php");
}

if(isset($_POST['username'])){
	$uname = $_POST['username'];
	$passw = sha1($_POST['password']);

	$q = "SELECT uname, password FROM admin WHERE uname='$uname' AND password='$passw'";
	$sql = mysqli_fetch_row(mysqli_query($conn, $q));
	if($sql > 0){
		$_SESSION['admin'] = true;
		header('location: index.php');
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Admin</title>
		<link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
		<link rel="stylesheet" type="text/css" href="../assets/css/admin.css" />
	</head>

	<body class="body-login">
		<div class="container">
		<div class="form-login col-md-4 col-sm-8 col-xs-10 col-md-offset-4 col-sm-offset-2 col-xs-offset-1">
			<div class="row login-header">
				<div class="col-md-12">
					<h3>Login Admin</h3>
				</div>
			</div>
			<div class="row login-isi">
				<div class="col-md-12">
					<form role="form" method="post">
						<div class="form-group">
						    <label>Username</label>
						    <input type="text" class="form-control" name="username" placeholder="Username">
  						</div>
  						<div class="form-group">
						    <label>Password</label>
						    <input type="password" class="form-control" name="password" placeholder="Password">
					  	</div>
					  	<button type="reset" class="btn btn-warning">Reset</button>
  						<button type="submit" class="btn btn-primary">Login</button>
					</form>
				</div>
			</div>
		</div>
		</div>
	</body>
</html>