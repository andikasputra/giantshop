<?php
if(isset($_POST['kirim'])){
    $q = "INSERT INTO `jenis` VALUES ('$_POST[kdjenis]','$_POST[nmjenis]')";
    $sql = mysqli_query($conn, $q);
    if($sql)
        header("location: ?p=kategori");
}
?>
<div class="title">

    <h3>tambah kategori</h3>

</div>
<form method="post">
    <div class="row">

        <div class="col-md-5">
            <label for="kdjenis">Kode Kategori</label><br />
            <input type="text" name="kdjenis" class="form-control" placeholder="Kode Kategori" /><br />
            <label for="nmjenis">Nama Kategori</label><br />
            <input type="text" name="nmjenis" class="form-control" placeholder="Nama Kategori" /><br />
            
            <button type="submit" class="btn btn-primary" name="kirim">Tambah</button>
            <button type="reset" class="btn btn-warning">Reset</button>
        </div>

    </div>
</form>