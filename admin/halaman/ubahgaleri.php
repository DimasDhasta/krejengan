<?php
    $id     = $_GET['id'];
    $sql    = "SELECT * FROM galery WHERE id_galery = '$id'";
    $q      = mysqli_query($conn,$sql);
    $r      = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Berita</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1" >Judul</label>
                <input name="txtjudul" value="<?=$r['judul_galery']?>" class="form-control py-4" type="text" placeholder="Masukkan judul" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal</label>
        <input name="txttgl" value="<?=$r['tanggal']?>" class="form-control py-4" type="date"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="txtgbr" value="<?=$r['gambar']?>" class="form-control py-4" placeholder="Masukan Gambar" type="file"> </div>
        <img src="../gambar/<?=$r['gambar']?>" alt="" width="50" height="50">
    

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

        if(empty($gambar)){
            mysqli_query($conn,"UPDATE galery SET judul_galery = '$judul', tanggal = '$tgl' WHERE id_galery = '$id'")or die(mysqli_error($conn));  
        }else{
            mysqli_query($conn,"UPDATE galery SET judul_galery = '$judul', tanggal = '$tgl', gambar = '$gambar' WHERE id_galery = '$id'");
            copy($tmp, "../gambar/$gambar");
        }
          echo "<script>alert('Data berhasil disimpan');location='.?hal=galery'</script>";
    }
    ?>
</form>
