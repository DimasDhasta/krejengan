<h3 class="mt-4">Daftar Agenda</h3>
<hr>
<a href=".?hal=tambahagenda" class="btn btn-outline-primary">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th width="5%">No</th>
                    <th width="55%">Judul</th>
                    <th width="13%">Tanggal</th>
                    <th width="10%">Konten</th>
                    <th width="17%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM agenda";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$r['judul_agenda']?></td>
                    <td><?=$r['tanggal']?></td>
                    <td><?=$r['konten_agenda']?></td>
                    <td>
                        <a class="btn btn-info btn-sm" href=".?hal=ubahagenda&id=<?=$r['id_agenda'] ?>">
                        <i class="fas fa-edit"></i>Ubah</a>
                        
                        <a class="btn btn-danger btn-sm" onclick= "return confirm('Apakah Anda yakin ingin menghapus ?')" href=".?hal=hapusagenda&id=<?=$r['id_agenda'] ?>">
                        <i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</div>