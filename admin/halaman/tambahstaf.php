<h3 class="mt-4">Form Staf Kecamatan</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1" >Nama</label>
                <input name="txtnama" class="form-control py-4" type="text" placeholder="Masukkan nama" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Jabatan</label>
        <input name="txtjbt" class="form-control py-4" type="text"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Email</label>
        <input name="txtemail" class="form-control py-4" type="email"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txttlp" class="form-control py-4" type="number"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Foto</label>
        <input name="txtgbr" class="form-control py-4" type="file"  />
    </div>

    <div class="form-group mt-4 mb-0">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    <?php
    if (@$_POST['simpan']) {
        $nama      = $_POST['txtnama'];
        $jabatan   = $_POST['txtjbt'];
        $email      = $_POST['txtemail'];
        $telepon    = $_POST['txttlp'];
        $foto      = $_FILES['txtgbr']['name'];
        $tmp       = $_FILES['txtgbr']['tmp_name'];
        $iduser    = "1";

        mysqli_query($conn,"INSERT INTO staf(nama,jabatan,email,telepon,id_user)VALUES('$nama','$jabatan','$email','$telepon','$iduser')")or die(mysqli_error($conn));
        copy($tmp, "../gambar/$foto");
        echo "<script>alert('Data berhasil disimpan');location='.?hal=staf'</script>";
    }
    ?>
</form>