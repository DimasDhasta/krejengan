<?php
    $id     = $_GET['id'];
    $sql    = "SELECT * FROM subscriber WHERE id_sr = '$id'";
    $q      = mysqli_query($conn,$sql);
    $r      = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Konfirmasi</h3>
<hr>
<form method="post" action="">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1" >Email</label>
                <input name="eml"value="<?=$r['email']?>" class="form-control py-4" type="text" placeholder="" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal</label>
        <input name="tgl" value="<?=$r['tanggal']?>" class="form-control py-4" type="date"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Status</label>
        <input name="sts"value="<?=$r['status']?>" class="form-control py-4" type="text" placeholder="" />
    </div>

    <div class="form-group mt-4 mb-0">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    <?php
    if (@$_POST['simpan']) {
        $email  = $_POST['eml'];
        $tgl    = $_POST['tgl'];
        $status = $_POST['sts'];
        $iduser   = "1";

        if(empty($pass)){
            mysqli_query($conn,"UPDATE subscriber SET email = '$email', tanggal = '$tgl', status = '$status' WHERE id_sr = '$id'");
        }
          echo "<script>alert('Data berhasil disimpan');location='.?hal=followers'</script>";
    }
    ?>
</form>