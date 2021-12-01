<?php
    $id     = $_GET['id'];
    $sql    = "DELETE FROM biodata WHERE id_biodata = '$id'";
    $q      = mysqli_query($conn,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=biodata'</script>";
?>