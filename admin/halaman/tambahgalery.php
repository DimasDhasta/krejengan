<h3 class="mt-4">Form Galery</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1" >Judul</label>
                <input name="txtjudul" class="form-control py-4" type="text" placeholder="Masukkan judul" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal</label>
        <input name="txttgl" class="form-control py-4" type="date"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="txtgbr" class="form-control py-4" type="file"  />
    </div>

    <div class="form-group mt-4 mb-0">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    <?php
    if (@$_POST['simpan']) {
        $judul  = $_POST['txtjudul'];
        $tgl    = $_POST['txttgl'];
        $gambar = $_FILES['txtgbr']['name'];
        $tmp    = $_FILES['txtgbr']['tmp_name'];
        $iduser   = "1";

        mysqli_query($conn,"INSERT INTO galery(judul_galery,tanggal,gambar,id_user)VALUES('$judul','$tgl','$gambar','$iduser')")or die(mysqli_error($conn));
        copy($tmp, "../gambar/$gambar");
        echo "<script>alert('Data berhasil disimpan');location='.?hal=galery'</script>";
    }
    ?>
</form>