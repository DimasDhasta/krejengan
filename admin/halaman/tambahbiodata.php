<h3 class="mt-4">Form Biodata</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1" >Nama Perusahaan</label>
                <input name="txtnama" class="form-control py-4" type="text" placeholder="Masukkan judul" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txttlp" class="form-control py-4" type="text" placeholder="+62xxx">
    </div>

    <div class="form-group">
        <label class="small mb-1">Alamat</label>
        <input name="txtalamat" class="form-control py-4" cols="30" rows="10">
    </div>

    <div class="form-group">
        <label class="small mb-1">Pimpinan</label>
        <input name="txtpmp" class="form-control py-4" cols="30" rows="10">
    </div>

    <div class="form-group">
        <label class="small mb-1">Visi</label>
        <textarea name="txtvisi" class="form-control py-4" cols="30" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label class="small mb-1">Misi</label>
        <textarea name="txtmisi" class="form-control py-4" cols="30" rows="10"></textarea>
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
        $nama  = $_POST['txtnama'];
        $tlp    = $_POST['txttlp'];
        $alamat = $_POST['txtalamat'];
        $pimpin = $_POST['txtpmp'];
        $visi = $_POST['txtvisi'];
        $misi = $_POST['txtmisi'];
        $gambar = $_FILES['txtgbr']['name'];
        $tmp    = $_FILES['txtgbr']['tmp_name'];
        $iduser   = "1";

        mysqli_query($conn,"INSERT INTO biodata(nama_perusahaan,telepon,alamat,nama_pimpinan,visi,misi,logo_perusahaan,id_user)VALUES('$nama','$tlp','$alamat','$pimpin','$visi','$misi','$gambar','$iduser')")or die (mysqli_error($conn));
        echo "<script>alert('Data berhasil disimpan');location='.?hal=biodata'</script>";
    }
    ?>
</form>
