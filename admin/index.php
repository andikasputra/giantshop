<?php 

require_once('../conf/db.php'); 

session_start();

if(!isset($_SESSION['admin']))
    header("location: /admin/login.php");
?>
<!DOCTYPE html>
<html lang="id">

    <head>
        <title>Admin</title>

        <link rel="shortcut icon" type="image" href="../assets/img/favicon.jpg" />

        <link rel="stylesheet" type="text/css" href="../assets/css/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../assets/css/admin.css" />
    </head>
    
    <body>

        <div class="container-fluid">

            <div class="row">
        
                <nav class="navigation col-md-2 col-sm-3">

                    <header class="header">
                
                        <div class="web-title"><h1>Giantshop</h1></div>
                        
                        <div class="notification">
                        
                            
                        
                        </div>
                    
                    </header>
                
                    <ul>
                    
                        <li><a href="?"><i class="fa fa-home"></i> Beranda</a></li>
                        <li><a href="?p=barang"><i class="fa fa-cubes"></i> Barang</a></li>
                        <li><a href="?p=supplier"><i class="fa fa-user"></i> Supplier</a></li>
                        <li><a href="?p=merk"><i class="fa fa-glass"></i> Merk</a></li>
                        <li><a href="?p=kategori"><i class="fa fa-folder-open"></i> Kategori</a></li>
                        <li><a href="?p=member"><i class="fa fa-users"></i> Member</a></li>
                        <li><a href="?p=transaksi"><i class="fa fa-shopping-cart"></i> Transaksi</a></li>
                        <li><a href="?p=komentar"><i class="fa fa-comments"></i> Komentar</a></li>
                        <li><a href="?p=pengaturan"><i class="fa fa-gears"></i> Pengaturan</a></li>
                        <li><a href="logout.php" onclick="return confirm('Anda yakin mau keluar?')"><i class="fa fa-power-off"></i> Logout</a></li>
                        
                    </ul>
                
                </nav>
                
                <main class="col-md-10 col-sm-4 col-md-offset-2 col-sm-offset-8 content">
                    <?php
                        if(isset($_GET['p'])){
                            switch($_GET['p']){
                                case 'barang' : $page = 'barang/index.php'; break;
                                case 'tambahbarang' : $page = 'barang/additem.php'; break;
                                case 'editbarang' : $page = 'barang/edititem.php'; break;
                                case 'hapusbarang' : $page = 'barang/delitem.php'; break;
                                case 'supplier' : $page = 'supplier/index.php'; break;
                                case 'tambahsupplier' : $page = 'supplier/additem.php'; break;
                                case 'editsupplier' : $page = 'supplier/edititem.php'; break;
                                case 'hapussupplier' : $page = 'supplier/delitem.php'; break;
                                case 'merk' : $page = 'merk/index.php'; break;
                                case 'tambahmerk' : $page = 'merk/additem.php'; break;
                                case 'editmerk' : $page = 'merk/edititem.php'; break;
                                case 'hapusmerk' : $page = 'merk/delitem.php'; break;
                                case 'kategori' : $page = 'kategori/index.php'; break;
                                case 'tambahkategori' : $page = 'kategori/additem.php'; break;
                                case 'editkategori' : $page = 'kategori/edititem.php'; break;
                                case 'hapuskategori' : $page = 'kategori/delitem.php'; break;
                                case 'member' : $page = 'member/index.php'; break;
                                case 'hapusmember' : $page = 'member/delitem.php'; break;
                                case 'transaksi' : $page = 'transaksi/index.php'; break;
                                case 'detailtransaksi' : $page = 'transaksi/detailitem.php'; break;
                                case 'edittransaksi' : $page = 'transaksi/edititem.php'; break;
                                case 'hapustransaksi' : $page = 'transaksi/delitem.php'; break;
                                case 'komentar' : $page = 'komentar/index.php'; break;
                                case 'hapuskomentar' : $page = 'komentar/delitem.php'; break;
                            }
                            require_once('operation/'.$page);
                        }else
                            require_once('default.php');
                    ?>
                </main>

            </div>

        </div>

        <script type="text/javascript" src="../assets/js/jquery-2.1.1.min.js"></script>
        <script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        $(document).ready(){
            $('a').tooltip('show');
        }
        </script>

    </body>

</html>