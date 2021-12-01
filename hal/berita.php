<!-- mian-content -->
<!-- //header -->
<div class="banner-content inner" id="home">
    <!-- header -->
    <header class="header">
        <div class="container-fluid px-lg-5">
            <!-- nav -->
            <nav class="py-4">
                <div id="logo">
                    <h1> <a href=".">Kecamatan Krejengan</a></h1>
                </div>

                <label for="drop" class="toggle">Menu</label>
                <input type="checkbox" id="drop" />
                <ul class="menu mt-2">
                    <li><a href="."><b>Home</b></a></li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-1" class="toggle">Profil <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                        <a href="#"><b>Profil</b> <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-1" />
                        <ul>
                            <li><a href=".?hal=profil"><b>Profil</b></a></li>
                            <li><a href=".?hal=pegawaikecamatan"><b>Data Pegawai Kecamatan</b></a></li>
                            <li><a href=".?hal=datawilayah"><b>Data Wilayah</b></a></li>
                            <li><a href=".?hal=datadesa" class="scroll"><b>Data Desa</b></a></li>
                            <li><a href=".?hal=datakades" class="scroll"><b>Data Kades</b></a></li>
                        </ul>
                    </li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Content <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                        <a href="#"><b>Content</b> <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href=".?hal=agenda"><b>Agenda</b></a></li>
                            <li class="active"><a href=".?hal=berita"><b>Berita</b></a></li>
                        </ul>
                    </li>
                    <li><a href=".?hal=galery"><b>Gallery</b></a></li>
                    <li><a href=".?hal=kontak"><b>Contact</b></a></li>
                </ul>
            </nav>
            <!-- //nav -->
        </div>
    </header>
    <!-- //header -->
</div>
<!-- //header -->
<!--// mian-content -->
<!---->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href=".">Home</a>
    </li>
    <li class="breadcrumb-item active">Semua Berita</li>
</ol>
<!---->
<!--// mian-content -->
<section class="ab-info-main py-md-5 py-4">
        <div class="container py-md-5 py-4">
            <h3 class="tittle text-center mb-lg-5 mb-3">Semua Berita</h3>
            <div class="row mt-lg-5 mt-4">
                <?php
                    $sql = "SELECT * FROM berita order by id_berita desc";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_array($q)){
                ?>
                <div class="col-md-6 events-img mb-4">
                    <a href=".?hal=beritadetail&id=<?=$r['id_berita'] ?>"><img src="gambar/<?=$r['gambar']?>" width="550" height="450"class="img-fluid" alt="user-image" /></a>
                </div><br>
                <div class="col-md-6 events-info">
                    <h3><span class="sub-tittle"><?=$r['no_berita']?></span><a href=".?hal=beritadetail&id=<?=$r['id_berita'] ?>" class="text-dark"><?=$r['judul_berita']?></h3><p><?=substr($r['konten_detail'],0,100)?>.....</p>
                    <a href=".?hal=beritadetail&id=<?=$r['id_berita'] ?>" class="btn btn-outline-warning"><b>Read more</b></a>
                    <ul class="events-icons new-inf mt-md-4 mt-3 d-flex">
                        <li><a href="#"><span class="fa fa-user mx-1"></span></a> Dimas Dhasta</li>
                        <li><a href="#"><span class="fa fa-calendar mx-1"></span> <?=$r['tanggal']?></a></li>
                        <li><a href="#"><span class="fa fa-folder-open mx-1"></span> Pilkades</a></li>
                    </ul>
                </div>
                    <?php } ?>
            </div>
        </div>
</section>