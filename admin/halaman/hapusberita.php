<?php
    $id     = $_GET['id'];
    $sql    = "DELETE FROM berita WHERE id_berita = '$id'";
    $q      = mysqli_query($conn,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=berita'</script>";
?>