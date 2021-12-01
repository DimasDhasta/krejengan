<?php
    $id     = $_GET['id'];
    $sql    = "SELECT * FROM staf WHERE id_sk = '$id'";
    $q      = mysqli_query($conn,$sql);
    $r      = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Staf</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1" >Nama</label>
                <input name="txtnama" value="<?=$r['nama']?>" class="form-control py-4" type="text" placeholder="Masukkan judul" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Jabatan</label>
        <input name="txtjbt" value="<?=$r['jabatan']?>" class="form-control py-4" type="text"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Email</label>
        <input name="txtemail" value="<?=$r['email']?>" class="form-control py-4" type="email"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input name="txttlp" value="<?=$r['telepon']?>" class="form-control py-4" type="number"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Foto</label>
        <input name="txtgbr" value="<?=$r['foto']?>" class="form-control py-4" placeholder="Masukan Gambar" type="file"> </div>
        <img src="../gambar/<?=$r['foto']?>" alt="" width="50" height="50">
    

    <div class="form-group mt-4 mb-0">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    <?php
    if (@$_POST['simpan']) {
        $nama       = $_POST['txtnama'];
        $jabatan    = $_POST['txtjbt'];
        $email      = $_POST['txtemail'];
        $telepon    = $_POST['txttlp'];
        $foto       = $_FILES['txtgbr']['name'];
        $tmp        = $_FILES['txtgbr']['tmp_name'];
        $iduser     = "1";

        if(empty($foto)){
            mysqli_query($conn,"UPDATE staf SET nama = '$nama', jabatan = '$jabatan', email = '$email', telepon = '$telepon' WHERE id_sk = '$id'")or die(mysqli_error($conn));  
        }else{
            mysqli_query($conn,"UPDATE staf SET nama = '$nama', jabatan = '$jabatan', email = '$email', telepon = '$telepon', foto = '$foto' WHERE id_sk = '$id'");
            copy($tmp, "../gambar/$foto");
        }
          echo "<script>alert('Data berhasil disimpan');location='.?hal=staf'</script>";
    }
    ?>
</form>
