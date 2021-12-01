<h3 class="mt-4">Daftar Berita</h3>
<hr>
<a href=".?hal=tambahberita" class="btn btn-outline-primary">Tambah Data</a>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="table-dark">
                <tr>
                    <th width="5%">No</th>
                    <th width="60%">Judul</th>
                    <th width="13%">Tanggal</th>
                    <th width="5%">Gambar</th>
                    <th width="17%">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no = 1;
                    $sql = "SELECT * FROM berita";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$no++?></td>
                    <td><?=$r['judul_berita']?></td>
                    <td><?=$r['tanggal']?></td>
                    <td>
                        <img src="../gambar/<?=$r['gambar']?>" alt="" width="50" height="50">
                    </td>
                    <td>
                        <a class="btn btn-info btn-sm" href=".?hal=ubahberita&id=<?=$r['id_berita'] ?>">
                        <i class="fas fa-edit"></i>Ubah</a>
                        
                        <a class="btn btn-danger btn-sm" onclick= "return confirm('Apakah Anda yakin ingin menghapus ?')" href=".?hal=hapusberita&id=<?=$r['id_berita'] ?>">
                        <i class="fas fa-trash"></i>Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</div>