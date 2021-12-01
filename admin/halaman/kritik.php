<h3 class="mt-4">Kritik & Saran </h3>
<hr>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Email</th>
                    <th>Pesan</th>
                    <th>Tanggal</th>

                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM pesan";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$r['email']?></td>
                    <td><?=$r['pesan']?></td>
                    <td><?=$r['tanggal']?></td>
                </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</div>