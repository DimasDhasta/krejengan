<?php
    $id     = $_GET['id'];
    $sql    = "DELETE FROM kades WHERE id_kd = '$id'";
    $q      = mysqli_query($conn,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=kades'</script>";
?>