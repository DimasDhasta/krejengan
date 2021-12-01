<h3 class="mt-4">Daftar User</h3>
<hr>
<a href=".?hal=tambahuser" class="btn btn-outline-primary">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Username</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody class="table-hover">
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM user";
                    $q = mysqli_query($conn,$sql)or die (mysqli_error($conn));
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$r['nama_user']?></td>
                    <td><?=$r['telepon']?></td>
                    <td><?=$r['alamat']?></td>
                    <td><?=$r['username']?></td>
                    <td>
                        <a class="btn btn-info btn-sm" href=".?hal=ubahuser&id=<?=$r['id_user'] ?>">
                        <i class="fas fa-edit"></i>Ubah</a>
                        
                        <a class="btn btn-danger btn-sm" onclick= "return confirm('Apakah Anda yakin ingin menghapus ?')" href=".?hal=hapususer&id=<?=$r['id_user'] ?>">
                        <i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</div>