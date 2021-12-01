<h3 class="mt-4">Biodata</h3>
<hr>
<a href=".?hal=tambahbiodata" class="btn btn-outline-primary">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama Kantor</th>
                    <th>Telepon</th>
                    <th>Alamat</th>
                    <th>Pimpinan</th>
                    <th>Logo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM biodata";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$r['nama_perusahaan']?></td>
                    <td><?=$r['telepon']?></td>
                    <td><?=$r['alamat']?></td>
                    <td><?=$r['nama_pimpinan']?></td>
                    <td>
                        <img src="../gambar/<?=$r['logo_perusahaan']?>" alt="" width="50" height="50">
                    </td>
                    <td>
                        <a class="btn btn-info btn-sm" href=".?hal=ubahbiodata&id=<?=$r['id_biodata'] ?>">
                        <i class="fas fa-edit"></i>Ubah</a>
                        
                        <a class="btn btn-danger btn-sm" onclick= "return confirm('Apakah Anda yakin ingin menghapus ?')" href=".?hal=hapusbiodata&id=<?=$r['id_biodata'] ?>">
                        <i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</div>