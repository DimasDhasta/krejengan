<h3 class="mt-4">Comment </h3>
<hr>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Berita</th>
                    <th>Email</th>
                    <th>Comment</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM komen";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$r['noberita']?></td>
                    <td><?=$r['email']?></td>
                    <td><?=$r['komen']?></td>
                </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</div>