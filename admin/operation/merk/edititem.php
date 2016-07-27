<?php
if(isset($_POST['ubah'])){
    $nmmerk = $_POST['nmmerk'];
    $kdmerk = $_POST['kdmerk'];
    $notelp = $_POST['notelp'];
    $q = "UPDATE `merk` SET nmmerk='$nmmerk', notelp='$notelp' WHERE kdmerk='".$kdmerk."'";
    $sql = mysql_query($q);
    if($sql)
        header("location: ?p=merk");
}else if(isset($_GET['kd'])){
    $q = "SELECT * FROM `merk` WHERE kdmerk='$_GET[kd]' ";
    $sql = mysql_query($q);
    $res = mysql_fetch_array($sql);?>

    <div class="title">

        <h3>edit merk</h3>

    </div>
    <form method="post">
        <div class="row">

            <div class="col-md-5">
                <label for="kdmerk">Kode Merk</label><br />
                <input type="text" class="form-control" placeholder="Kode Merk" disabled="disabled" value="<?php echo $res[0]; ?>" /><br />
                <input type="hidden" name="kdmerk" value="<?php echo $res[0]; ?>" />
                
                <label for="nmmerk">Nama Merk</label><br />
                <input type="text" class="form-control" name="nmmerk" placeholder="Nama Merk" value="<?php echo $res[1]; ?>" /><br />
                
                <label for="notelp">No Telp</label><br />
                <input type="text" class="form-control" name="notelp" placeholder="No Telp" value="<?php echo $res[2]; ?>" /><br />
            
                <button type="submit" name="ubah" class="btn btn-success">Ubah</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </div>
    </form>
    <?php
}
?>