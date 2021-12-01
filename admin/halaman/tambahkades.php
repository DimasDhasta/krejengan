<h3 class="mt-4">Form Kades se-Kecamatan Krejengan</h3>
<hr>
<form method="post" action="">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1" >Nama Lengkap</label>
                <input name="txtnama" class="form-control py-4" type="text" placeholder="Masukkan nama lengkap" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Desa</label>
        <input name="txtdesa" class="form-control py-4" type="text" placeholder="Masukkan nama desa"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Jabatan</label>
        <input name="txtjbt" class="form-control py-4" type="text" placeholder="Masukkan jabatan" />
    </div>

    <div class="form-group">
        <label class="small mb-1">Jenis Kelamin</label>
        <input name="txtjk" class="form-control py-4" type="text" placeholder="Masukkan jenis kelamin" />
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

        mysqli_query($conn,"INSERT INTO kepala_desa(nama,desa,jabatan,jk,id_user)VALUES('$nama','$desa','$jabatan','$jk','$iduser')");
        echo "<script>alert('Data berhasil disimpan');location='.?hal=kades'</script>";
    }
    ?>
</form>
