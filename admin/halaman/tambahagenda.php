<h3 class="mt-4">Form Agenda</h3>
<hr>
<form method="post" action="">
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
        <label class="small mb-1">Konten</label>
        <textarea name="txtkonten" class="form-control py-4" cols="30" rows="10"></textarea>
    </div>

    <div class="form-group mt-4 mb-0">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    <?php
    if (@$_POST['simpan']) {
        $judul  = $_POST['txtjudul'];
        $tgl    = $_POST['txttgl'];
        $konten = $_POST['txtkonten'];
        $iduser   = "1";

        mysqli_query($conn,"INSERT INTO agenda(judul_agenda,tanggal,konten_agenda,id_user)VALUES('$judul','$tgl','$konten','$iduser')");
        echo "<script>alert('Data berhasil disimpan');location='.?hal=agenda'</script>";
    }
    ?>
</form>
