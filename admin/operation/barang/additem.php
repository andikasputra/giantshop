<?php

function jenisBarang(){
    $q = "SELECT * FROM `jenis` ORDER BY 'kdjenis' ASC";
    $sql = mysqli_query($conn, ($q);
    while($res = mysqli_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[1]."</option>";
    }
}
function merkBarang(){
    $q = "SELECT * FROM `merk` ORDER BY 'kdmerk' ASC";
    $sql = mysqli_query($conn, ($q);
    while($res = mysqli_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[1]."</option>";
    }
}
function supplierBarang(){
    $q = "SELECT * FROM `supplier` ORDER BY 'kdsupplier' ASC";
    $sql = mysqli_query($conn, ($q);
    while($res = mysqli_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[1]."</option>";
    }
}


if(isset($_POST['kirim'])){
    $kdbarang   = $_POST['kdbarang'];
    $nmbarang   = $_POST['nmbarang'];
    $jenis      = $_POST['jenis'];
    $merk       = $_POST['merk'];
    $supplier   = $_POST['supplier'];
    $harga      = $_POST['harga'];
    $stok       = $_POST['stok'];
    $deskripsi  = $_POST['deskripsi'];
    $nmfoto     = str_replace(' ', '-', $nmbarang.'.jpg');
    $filefoto   = $_FILES['foto']['tmp_name'];
    $q = "INSERT INTO `barang`";
    $q .= " VALUES ";
    $q .= "('$kdbarang','$nmbarang','$jenis','$merk','$supplier','$deskripsi','$nmfoto','$harga','$stok')";
    $sql = mysqli_query($conn, ($q);
    if($sql){
        copy($filefoto,'../assets/prodimgs/'.$nmfoto);
        header("location: ?p=barang");
    }
}


?>
<div class="title">

    <h3>tambah barang</h3>

</div>
<form method="post" enctype="multipart/form-data" role="form">

    <div class="row">

        <div class="col-md-5">

            <label for="kdbarang">Kode Barang</label><br />
            <input type="text" class="form-control" name="kdbarang" placeholder="Kode Barang" /><br />

            <label for="nmbarang">Nama Barang</label><br />
            <input type="text" class="form-control" name="nmbarang" placeholder="Nama Barang" /><br />
            
            <label for="jnsbarang">Kategori Barang</label><br />
            <select name="jenis" class="form-control">
                <?php jenisBarang(); ?>
            </select><br />
            
            <label for="merkbarang">Merk Barang</label><br />
            <select name="merk" class="form-control">
                <?php merkBarang(); ?>
            </select><br />
            
            <label for="supplier">Supplier</label><br />
            <select name="supplier" class="form-control">
                <?php supplierBarang(); ?>
            </select><br />
            
            <label for="harga">Harga Barang</label><br />
            <input type="number" class="form-control" name="harga" placeholder="Harga Barang" /><br />
            
            <label for="stok">Stok Barang</label><br />
            <input type="number" class="form-control" name="stok" placeholder="Stok Barang" /><br />
            
            <label for="deskripsi">Deskripsi Barang</label><br />
            <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Barang" rows="5"></textarea><br />
            
            <label for="foto">Foto Barang</label><br />
            <input type="file" class="form-control" name="foto" accept="image/jpeg" /><br />
            
            <button type="submit" name="kirim" class="btn btn-primary">Input Barang</button>
            <button type="reset" class="btn btn-warning">Reset</button>

        </div>

    </div>

</form>