<h3 class="mt-4">Data Staf Kecamatan</h3>
<hr>
<a href=".?hal=tambahstaf" class="btn btn-outline-primary">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th width="5%">No</th>
                    <th width="23%">Nama</th>
                    <th width="20%">Jabatan</th>
                    <th width="5%">Foto</th>
                    <th width="15%">Email</th>
                    <th width="15%">Telepon</th>
                    <th width="27%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM staf";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$r['nama']?></td>
                    <td><?=$r['jabatan']?></td>
                    <td>
                        <img src="../gambar/<?=$r['foto']?>" alt="" width="50" height="50">
                    </td>
                    <td><?=$r['email']?></td>
                    <td><?=$r['telepon']?></td>
                    <td>
                        <a class="btn btn-info btn-sm" href=".?hal=ubahstaf&id=<?=$r['id_sk'] ?>">
                        <i class="fas fa-edit"></i>Ubah</a>
                        
                        <a class="btn btn-danger btn-sm" onclick= "return confirm('Apakah Anda yakin ingin menghapus ?')" href=".?hal=hapusstaf&id=<?=$r['id_staf'] ?>">
                        <i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</div>