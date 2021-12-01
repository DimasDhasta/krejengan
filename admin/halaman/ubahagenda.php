<?php
    $id     = $_GET['id'];
    $sql    = "SELECT * FROM agenda WHERE id_agenda = '$id'";
    $q      = mysqli_query($conn,$sql);
    $r      = mysqli_fetch_assoc($q);
?>
<h3 class="mt-4">Form Agenda</h3>
<hr>
<form method="post" action="">
    <div class="form-row">
        <div class="col-md-12">
            <div class="form-group">
                <label class="small mb-1" >Judul</label>
                <input name="txtjudul"value="<?=$r['judul_agenda']?>" class="form-control py-4" type="text" placeholder="Masukkan judul" />
            </div>
        </div>
    </div>

    <div class="form-group">
        <label class="small mb-1">Tanggal</label>
        <input name="txttgl" value="<?=$r['tanggal']?>" class="form-control py-4" type="date"  />
    </div>

    <div class="form-group">
        <label class="small mb-1">Konten</label>
        <textarea name="txtkonten" class="form-control py-4" cols="30" rows="10"><?=$r['konten_agenda']?></textarea>
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

        if(empty($pass)){
            mysqli_query($conn,"UPDATE agenda SET judul_agenda = '$judul', tanggal = '$tgl', konten_agenda = '$konten' WHERE id_agenda = '$id'");
        }
          echo "<script>alert('Data berhasil disimpan');location='.?hal=agenda'</script>";
    }
    ?>
</form>