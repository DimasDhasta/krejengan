<?php
    $id     = $_GET['id'];
    $sql    = "DELETE FROM agenda WHERE id_agenda = '$id'";
    $q      = mysqli_query($conn,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=agenda'</script>";
?>