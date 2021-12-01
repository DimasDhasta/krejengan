<?php
    $id     = $_GET['id'];
    $sql    = "SELECT * FROM berita WHERE id_berita = '$id'";
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
                <input name="txtjudul" value="<?=$r['judul_berita']?>" class="form-control py-4" type="text" placeholder="Masukkan judul" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">No. Berita</label>
        <input name="txtno" value="<?=$r['no_berita']?>" class="form-control py-4" type="number"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal</label>
        <input name="txttgl" value="<?=$r['tanggal']?>" class="form-control py-4" type="date"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="txtgbr" value="<?=$r['gambar']?>" class="form-control py-4" placeholder="Masukan Gambar" type="file"> </div>
        <img src="../gambar/<?=$r['gambar']?>" alt="" width="50" height="50">

    <div class="form-group">
        <label class="small mb-1">Konten Berita</label>
        <textarea name="txtkonten" class="form-control py-4" cols="30" rows="10"><?=$r['konten_detail']?></textarea>
    </div>

    <div class="form-group mt-4 mb-0">
        <input type="submit" value="Simpan" name="simpan" class="btn btn-primary btn-block">
    </div>
    <?php
    if (@$_POST['simpan']) {
        $judul  = $_POST['txtjudul'];
        $noberita  = $_POST['txtno'];
        $tgl    = $_POST['txttgl'];
        $gambar = $_FILES['txtgbr']['name'];
        $tmp    = $_FILES['txtgbr']['tmp_name'];
        $konten    = $_POST['txtkonten'];
        $iduser   = "1";

        if(empty($gambar)){
            mysqli_query($conn,"UPDATE berita SET judul_berita = '$judul', tanggal = '$tgl',s konten_detail = '$konten', no_berita = '$noberita' WHERE id_berita = '$id'")or die(mysqli_error($conn));  
        }else{
            mysqli_query($conn,"UPDATE berita SET judul_berita = '$judul', tanggal = '$tgl', gambar = '$gambar' WHERE id_berita = '$id'");
            copy($tmp, "../gambar/$gambar");
        }
          echo "<script>alert('Data berhasil disimpan');location='.?hal=berita'</script>";
    }
    ?>
</form>