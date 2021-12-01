<?php
    $id     = $_GET['id'];
    $sql    = "DELETE FROM galery WHERE id_galery = '$id'";
    $q      = mysqli_query($conn,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=galery'</script>";
?>