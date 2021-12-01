<?php
    $id     = $_GET['id'];
    $sql    = "SELECT * FROM biodata WHERE id_biodata = '$id'";
    $q      = mysqli_query($conn,$sql);
    $r      = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Biodata</h3>
<hr>
<form method="post" action="" enctype="multipart/form-data">
    
    <div class="form-group">
        <label class="small mb-1">Nama Perusahaan</label>
        <input value="<?=$r['nama_perusahaan']?>" name="txtnama" class="form-control py-4" type="text" placeholder="+62xxx">
    </div>

    <div class="form-group">
        <label class="small mb-1">Telepon</label>
        <input value="<?=$r['telepon']?>" name="txttlp" class="form-control py-4" type="text" placeholder="+62xxx">
    </div>

    <div class="form-group">
        <label class="small mb-1">Alamat</label>
        <input value="<?=$r['alamat']?>" name="txtalamat" class="form-control py-4" cols="30" rows="10">
    </div>

    <div class="form-group">
        <label class="small mb-1">Pimpinan</label>
        <input value="<?=$r['nama_pimpinan']?>" name="txtpmp" class="form-control py-4" cols="30" rows="10">
    </div>

    <div class="form-group">
        <label class="small mb-1">Visi</label>
        <textarea name="txtvisi" class="form-control py-4" cols="30" rows="3"><?=$r['visi']?> </textarea>
    </div>

    <div class="form-group">
        <label class="small mb-1">Misi</label>
        <textarea name="txtmisi" class="form-control py-4" cols="30" rows="10"><?=$r['misi']?></textarea>
    </div>

    <div class="form-group">
        <label class="small mb-1">Gambar</label>
        <input name="txtgbr" value="<?=$r['logo_perusahaan']?>" class="form-control py-4" placeholder="Masukan Gambar" type="file">
        <img src="../gambar/<?=$r['logo_perusahaan']?>" alt="" width="50" height="50">
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

        if(empty($pass)){
            mysqli_query($conn,"UPDATE biodata SET nama_perusahaan = '$nama', telepon = '$tlp', alamat = '$alamat', nama_pimpinan ='$pimpin', visi = '$visi', misi = '$misi' WHERE id_biodata = '$id'")or die(mysqli_error($conn));
        }else{
            mysqli_query($conn,"UPDATE biodata SET nama_perusahaan = '$nama', telepon = '$tlp', alamat = '$alamat',nama_pimpinan ='$pimpin', visi = '$visi', misi = '$misi', logo_perusahaan = '$gambar' WHERE id_biodata = '$id'");
            copy($tmp, "../gambar/$gambar");
        }
          echo "<script>alert('Data berhasil disimpan');location='.?hal=biodata'</script>";
    }
    ?>
</form>