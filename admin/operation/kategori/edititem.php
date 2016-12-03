<?php
if(isset($_POST['ubah'])){
    $nmjenis = $_POST['nmjenis'];
    $kdjenis = $_POST['kdjenis'];
    $q = "UPDATE jenis SET nmjenis='".$nmjenis."' WHERE kdjenis='".$kdjenis."'";
    $sql = mysqli_query($conn, $q);
    if($sql)
        header("location: ?p=kategori");
}else if(isset($_GET['kd'])){
    $q = "SELECT * FROM `jenis` WHERE kdjenis='$_GET[kd]' ";
    $sql = mysqli_query($conn, $q);
    $res = mysqli_fetch_array($sql);?>
    
    <div class="title">

        <h3>edit kategori</h3>

    </div>
    <form method="post">
        <div class="row">

            <div class="col-md-5">
                <label for="kdjenis">Kode Kategori</label><br />
                <input type="text" placeholder="Kode Kategori" class="form-control" disabled="disabled" value="<?php echo $res[0]; ?>" /><br />
                <input type="hidden" name="kdjenis" value="<?php echo $res[0]; ?>" />
                
                <label for="nmjenis">Nama Kategori</label><br />
                <input type="text" name="nmjenis" placeholder="Nama Kategori" class="form-control" value="<?php echo $res[1]; ?>" /><br />
            
                <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </div>
    </form>
    <?php
}
?>