<h3 class="mt-4">Followers </h3>
<hr>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM subscriber";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$r['email']?></td>
                    <td><?=$r['tanggal']?></td>
                    <td>
                        <?php
                        if(empty($r['status'])){
                            echo "<i>Belum dikonfirmasi<i>";
                        }else{
                            echo "<b>Pengikut<b>";
                        }
                        ?>
                    </td>
                    <td>
                        <a class="btn btn-info btn-sm" href=".?hal=konfirpengikut&id=<?=$r['id_sr'] ?>">
                        <i class="fas fa-check-circle"></i> Check</a>    

                        <a class="btn btn-warning btn-sm" href="mailto:<?=$r['email'] ?>">
                        <i class="fas fa-envelope"></i> Konfirmasi</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</div>