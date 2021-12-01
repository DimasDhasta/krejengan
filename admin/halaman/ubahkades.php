<?php
    $id     = $_GET['id'];
    $sql    = "SELECT * FROM kepala_desa WHERE id_kd = '$id'";
    $q      = mysqli_query($conn,$sql);
    $r      = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Kades se-Kecamatan Krejengan</h3>
<hr>
<form method="post" action="">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1" >Nama Lengkap</label>
                <input name="txtnama"value="<?=$r['nama']?>" class="form-control py-4" type="text"/>
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Desa</label>
        <input name="txtdesa" value="<?=$r['desa']?>" class="form-control py-4" type="text"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Jabatan</label>
        <input name="txtjbt" value="<?=$r['jabatan']?>" class="form-control py-4" type="text"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Jenis Kelamin</label>
        <input name="txtjk" value="<?=$r['jk']?>" class="form-control py-4" type="text"  />
    </div>

    <div class="form-group mt-4 mb-0">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    <?php
    if (@$_POST['simpan']) {
        $nama  = $_POST['txtnama'];
        $desa    = $_POST['txtdesa'];
        $jabatan = $_POST['txtjbt'];
        $jk      = $_POST['txtjk'];
        $iduser   = "1";

        if(empty($pass)){
            mysqli_query($conn,"UPDATE kepala_desa SET nama = '$nama', desa = '$desa', jabatan = '$jabatan', jk = '$jk' WHERE id_kd = '$id'");
        }
          echo "<script>alert('Data berhasil disimpan');location='.?hal=kades'</script>";
    }
    ?>
</form>