<h3 class="mt-4">Form Berita</h3>
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

    <div class="form-group">
        <label class="small mb-1">Konten Berita</label>
        <textarea name="txtkonten" class="form-control py-4" cols="30" rows="3"></textarea>
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
        $konten = $_POST['txtkonten'];
        $iduser   = "1";

        mysqli_query($conn,"INSERT INTO berita(judul_berita,tanggal,gambar,konten_detail,id_user)VALUES('$judul','$tgl','$gambar','$konten','$iduser')")or die(mysqli_error($conn));
        copy($tmp, "../gambar/$gambar");
        echo "<script>alert('Data berhasil disimpan');location='.?hal=berita'</script>";
    }
    ?>
</form>
