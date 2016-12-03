<?php
if(isset($_POST['kirim'])){
    $q = "INSERT INTO `supplier` VALUES ('$_POST[kdsupplier]','$_POST[nmsupplier]','$_POST[alamat]','$_POST[notelp]','$_POST[email]')";
    $sql = mysqli_query($conn, $q);
    if($sql)
        header("location: ?p=supplier");
}
?>
<div class="title">

    <h3>tambah supplier</h3>

</div>
<form method="post">
    <div class="row">

        <div class="col-md-5">
            <label for="kdsupplier">Kode Supplier</label><br />
            <input type="text" name="kdsupplier" class="form-control" placeholder="Kode Supplier" /><br />
            
            <label for="nmsupplier">Nama Supplier</label><br />
            <input type="text" name="nmsupplier" class="form-control" placeholder="Nama Supplier" /><br />
            
            <label for="notelp">No Telp Supplier</label><br />
            <input type="text" name="notelp" class="form-control" placeholder="No Telp Supplier" /><br />
            
            <label for="email">Email Supplier</label><br />
            <input type="email" name="email" class="form-control" placeholder="Email Supplier" /><br />
            
            <label for="alamat">Alamat Supplier</label><br />
            <textarea name="alamat" class="form-control" placeholder="alamat" rows="4"></textarea><br />
            
            <button type="submit" name="kirim" class="btn btn-primary">Tambah</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>
    </div>
</form>