<?php
if(isset($_POST['ubah'])){
    $nmsupplier = $_POST['nmsupplier'];
    $kdsupplier = $_POST['kdsupplier'];
    $alamat = $_POST['alamat'];
    $email = $_POST['email'];
    $notelp = $_POST['notelp'];
    $q = "UPDATE `supplier` SET nmsupplier='$nmsupplier', alamat='$alamat', email='$email', notelp='$notelp' WHERE kdsupplier='".$kdsupplier."'";
    $sql = mysqli_query($conn, $q) or die(mysqli_error($conn));
    if($sql)
        header("location: ?p=supplier");
}else if(isset($_GET['kd'])){
    $q = "SELECT * FROM `supplier` WHERE kdsupplier='$_GET[kd]' ";
    $sql = mysqli_query($conn, $q);
    $res = mysqli_fetch_array($sql);?>

    <div class="title">

        <h3>edit kategori</h3>

    </div>
    <form method="post">
        <div class="row">

            <div class="col-md-5">

                <label for="kdsupplier">Kode Merk</label><br />
                <input type="text" class="form-control" placeholder="Kode Supplier" disabled="disabled" value="<?php echo $res[0]; ?>" /><br />
                <input type="hidden" name="kdsupplier" value="<?php echo $res[0]; ?>" />
                
                <label for="nmsupplier">Nama Supplier</label><br />
                <input type="text" class="form-control" name="nmsupplier" placeholder="Nama Supplier" value="<?php echo $res[1]; ?>" /><br />
                
                <label for="alamat">Alamat Supplier</label><br />
                <textarea name="alamat" class="form-control" rows="5" placeholder="alamat"><?php echo $res[2]; ?></textarea><br />
                
                <label for="notelp">No Telp</label><br />
                <input type="text" class="form-control" name="notelp" placeholder="No Telp" value="<?php echo $res[3]; ?>" /><br />
                
                <label for="email">Email Supplier</label><br />
                <input type="email" class="form-control" name="email" placeholder="Email Supplier" value="<?php echo $res[4]; ?>" /><br />
            
                <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </div>
    </form>
    <?php
}
?>