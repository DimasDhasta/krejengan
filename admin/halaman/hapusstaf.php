<?php
    $id     = $_GET['id'];
    $sql    = "DELETE FROM staf WHERE id_user = '$id'";
    $q      = mysqli_query($conn,$sql);
    echo "<script>alert('Data berhasil dihapus');location='.?hal=staf'</script>";
?>