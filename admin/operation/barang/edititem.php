<?php

function jenisBarang($a){
    $q = "SELECT * FROM `jenis` WHERE kdjenis != '$a' ORDER BY 'kdjenis' ASC";
    $sql = mysql_query($q);
    $s = mysql_fetch_array(mysql_query("SELECT * FROM `jenis` WHERE kdjenis = '$a'"));
        echo "<option value='".$s[0]."'>".$s[1]."</option>";
    while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[1]."</option>";
    }
}
function merkBarang($a){
    $q = "SELECT * FROM `merk` WHERE kdmerk != '$a' ORDER BY 'kdmerk' ASC";
    $sql = mysql_query($q);
    $s = mysql_fetch_array(mysql_query("SELECT * FROM `merk` WHERE kdmerk = '$a'"));
        echo "<option value='".$s[0]."'>".$s[1]."</option>";
    while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[1]."</option>";
    }
}
function supplierBarang($a){
    $q = "SELECT * FROM `supplier` WHERE kdsupplier != '$a' ORDER BY 'kdsupplier' ASC";
    $sql = mysql_query($q);
    $s = mysql_fetch_array(mysql_query("SELECT * FROM `supplier` WHERE kdsupplier = '$a'"));
        echo "<option value='".$s[0]."'>".$s[1]."</option>";
    while($res = mysql_fetch_array($sql)){
        echo "<option value='".$res[0]."'>".$res[1]."</option>";
    }
}


if(isset($_POST['ubah'])){
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
    $q = "UPDATE `barang`";
    $q .= " SET ";
    $q .= "nmbarang='$nmbarang', kdjenis='$jenis', kdmerk='$merk', kdsupplier='$supplier', deskripsi='$deskripsi', ";
    if(!empty($nmfoto)) $q .= "foto='$nmfoto',"; 
    $q .= "harga='$harga', stok='$stok' WHERE kdbarang='$kdbarang'";
    $sql = mysql_query($q) or die(mysql_error());
    if($sql){
        copy($filefoto,'../assets/prodimgs/'.$nmfoto);
        header("location: ?p=barang");
    }

}else if(isset($_GET['kd'])){
    $q = "SELECT * FROM `barang` WHERE kdbarang='$_GET[kd]' ";
    $sql = mysql_query($q);
    $res = mysql_fetch_array($sql);?>

    <div class="title">

        <h3>edit barang</h3>

    </div>

	<form method="post" enctype="multipart/form-data">

        <div class="row">

            <div class="col-md-5">

        	    <label for="kdbarang">Kode Barang</label><br />
        	    <input type="text" name="kdbarang" class="form-control" value="<?php echo $res[0] ?>" readonly /><br />
        	    
        	    <label for="nmbarang">Nama Barang</label><br />
        	    <input type="text" name="nmbarang" class="form-control" value="<?php echo $res[1] ?>" /><br />
        	    
        	    <label for="jnsbarang">Kategori Barang</label><br />
        	    <select name="jenis" class="form-control">
        		<?php jenisBarang($res[2]); ?>
        	    </select><br />
        	    
        	    <label for="merkbarang">Merk Barang</label><br />
        	    <select name="merk" class="form-control">
        		<?php merkBarang($res[3]); ?>
        	    </select><br />
        	    
        	    <label for="supplier">Supplier</label><br />
        	    <select name="supplier" class="form-control">
        		<?php supplierBarang($res[4]); ?>
        	    </select><br />
        	    
        	    <label for="harga">Harga Barang</label><br />
        	    <input type="number" name="harga" class="form-control" value="<?php echo $res[7] ?>" /><br />
        	    
        	    <label for="stok">Stok Barang</label><br />
        	    <input type="number" name="stok" class="form-control" value="<?php echo $res[8] ?>" /><br />
        	    
        	    <label for="deskripsi">Deskripsi Barang</label><br />
        	    <textarea name="deskripsi" class="form-control" rows="5"><?php echo $res[5] ?></textarea><br />
        	    
        	    <label for="foto">Foto Barang</label><br />
        	    <input type="file" name="foto" class="form-control" accept="image/jpeg" /><br />
        	    
        	    <img src="../assets/prodimgs/<?php echo $res[6] ?>" width="200px" /><br />
        	    
        	    <button type="submit" name="ubah" class="btn btn-success">Ubah Barang</button>
        	    <button type="reset" class="btn btn-warning">Reset</button>

            </div>

        </div>
	</form>

    <?php
}
?>
