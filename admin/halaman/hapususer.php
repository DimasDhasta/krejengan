<?php
    $id     = $_GET['id'];
    $sql    = "DELETE FROM user WHERE id_user = '$id'";
    $q      = mysqli_query($conn,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=user'</script>";
?>