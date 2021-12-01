<h3 class="mt-4">Data Kepala Desa se-Kecamatan Krejengan</h3>
<hr>
<a href=".?hal=tambahkades" class="btn btn-outline-primary">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th width="5%">No</th>
                    <th width="25%">Nama</th>
                    <th width="20%">Desa</th>
                    <th width="20%">Jabatan</th>
                    <th width="15%">Jenis Kelamin</th>
                    <th width="15%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM kepala_desa";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$r['nama']?></td>
                    <td><?=$r['desa']?></td>
                    <td><?=$r['jabatan']?></td>
                    <td><?=$r['jk']?></td>
                    <td>
                        <a class="btn btn-info btn-sm" href=".?hal=ubahkades&id=<?=$r['id_kd'] ?>">
                        <i class="fas fa-edit"></i>Ubah</a>
                        
                        <a class="btn btn-danger btn-sm" onclick= "return confirm('Apakah Anda yakin ingin menghapus ?')" href=".?hal=hapuskades&id=<?=$r['id_kd'] ?>">
                        <i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</div>