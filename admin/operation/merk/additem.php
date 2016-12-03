<?php
if(isset($_POST['kirim'])){
    $q = "INSERT INTO `merk` VALUES ('$_POST[kdmerk]','$_POST[nmmerk]','$_POST[notelp]')";
    $sql = mysqli_query($conn, $q);
    if($sql)
        header("location: ?p=merk");
}
?>
<div class="title">

    <h3>tambah merk</h3>

</div>
<form method="post">

    <div class="row">

        <div class="col-md-5">
            <label for="kdmerk">Kode Merk</label><br />
            <input type="text" name="kdmerk" class="form-control" placeholder="Kode Merk" /><br />
            <label for="nmmerk">Nama Merk</label><br />
            <input type="text" name="nmmerk" class="form-control" placeholder="Nama Merk" /><br />
            <label for="notelp">No Telp Merk</label><br />
            <input type="text" name="notelp" class="form-control" placeholder="No Telp Merk" /><br />
            
            <button type="submit" name="kirim" class="btn btn-primary">Tambah</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>
    </div>
</form>