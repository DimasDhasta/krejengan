
<!-- mian-content -->
<div class="banner-content" id="home">
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
                    <li class="active"><a href="."><b>Home</b></a></li>
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
                            <li><a href=".?hal=berita" class="scroll"><b>Berita</b></a></li>
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
<!--/banner-->
<div class="banner-info-w3pvt">
    <h3>Welcome to Website Krejengan Office</h3>
    <p class="my-4"></p>
    <div class="ban-buttons">
        
    </div>
</div>
    <!--// banner-inner -->
</div>
<!-- //header -->
<!-- banner-bottom-wthree -->
<section class="banner-bottom-wthree py-5" id="about">
    <div class="container py-md-3">
        <div class="row banner-grids">
            <div class="col-lg-8 content-left-bottom text-left pr-lg-5">
            <h3 class="tittle text-capitalize text-left my-md-4">Apa itu kecamatan ?</h3>
                
                <p class="mt-2 text-left">Kecamatan atau yang disebut dengan nama lain adalah bagian wilayah dari Kabupaten/Kota yang dipimpin oleh camat. Kelurahan adalah bagian wilayah dari kecamatan sebagai perangkat kecamatan. Maksud adanya kecamatan adalah dalam rangka meningkatkan koordinasi penyelenggaraan pemerintahan, pelayanan publik, dan pemberdayaan masyarakat Desa/kelurahan.</p>

            </div>
            <div class="col-lg-4 content-right-bottom text-left">
                <img src="images/mikir.png" alt="news image" width="300px" height="300px" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container py-md-5">
        <div class="row banner-grids">
            <div class="col-lg-6 banner-image">
                <div class="effect-w3">
                    <img src="images/Profil2.jpg" alt="" class="img-fluid image1">
                </div>
            </div>
            <div class="col-lg-6 last-img pl-lg-5 p-3">
                <h3 class="tittle mb-lg-3 mb-3">Kasi Of Office</h3>
                <p class="mb-2">Di Kecamatan Krejengan memiliki 6 Kasi di bidang yang berbed-beda, diantaranya sebagai berikut :</p>
                <ul class="tic-info list-unstyled">
                    <li>

                        <span class="fa fa-user-circle mr-2"></span>KASUBBAG. UMUM DAN KEPEGAWAIAN
                    </li>
                    <li>

                        <span class="fa fa-user-circle mr-2"></span>KASI PEMERINTAHAN
                    </li>
                    <li>

                        <span class="fa fa-user-circle mr-2"></span>KASI PEMBANGUNAN

                    </li>
                    <li>
                        <span class="fa fa-user-circle mr-2"></span>KASI PEREKONOMIAN
                    </li>
                    <li>
                        <span class="fa fa-user-circle mr-2"></span>KASI TRANTIB

                    </li>
                    <li>
                        <span class="fa fa-user-circle mr-2"></span>KASI KESRA

                    </li>
                </ul>

            </div>
        </div>
    </div>
    <div class="container py-md-6">
        <div class="header text-center">
            <h3 class="tittle mb-lg-5 mb-3">Agenda</h3>
        </div>
        <div class="container">
        <div class="row service-grid-grids text-center pt-lg-5 mt-3">
            <?php
                    $sql = "SELECT * FROM agenda order by tanggal desc limit 3";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
            ?>
            <div class="col-lg-4 col-md-6 service-grid service-grid1">
                <div class="service-icon">
                    <span class="fas fa-calendar-plus fa-3x" style="color: orange;" aria-hidden="true"></span>
                </div>
                <h4 class="mt-3"><?=$r['tanggal']?></h4>
                <p class="mt-2 mb-1"><?=$r['judul_agenda']?></p>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="container py-md-5">
        <div class="header text-center">
            <h3 class="tittle mb-lg-5 mb-3">Gallery Terkini</h3>
        </div>
        <div class="row news-grids text-center gallery-wrap">
            <?php
                $sql = "SELECT * FROM galery order by id_galery desc limit 3";
                $q = mysqli_query($conn,$sql);
                while($r = mysqli_fetch_assoc($q)){
            ?>
            <div class="col-md-4 gal-img">
                    <a href="#" ><img src="gambar/<?=$r['gambar']?>" data-target="#gal" width="350" height="50" alt="news image" class="img-fluid mb-2" style="border-top-left-radius:15px; border-top-right-radius:15px;"></a>
                    <div class="port-desc text-center">
                            <h6 class="main-title-w3pvt text-center mb-3" style="background-color: orange; border-bottom-left-radius:15px; border-bottom-right-radius:15px; padding: 5px;" ><?=$r['judul_galery']?></h6>
                        </div>
            </div>
            <?php } ?>
        </div>
    </div>
    <div class="container py-md-5 py-4">
        <h3 class="tittle text-center mb-lg-5 mb-3">Berita Terkini</h3>
        <div class="row mt-lg-5 mt-4">
            <?php
                $sql = "SELECT * FROM berita order by id_berita desc limit 1";
                $q = mysqli_query($conn,$sql);
                while($r = mysqli_fetch_assoc($q)){
            ?>
                <div class="col-md-6 events-img mb-4">
                    <a href="#"><img src="gambar/<?=$r['gambar']?>" width="550" height="450"class="img-fluid" alt="user-image" /></a>
                </div><br>
                <div class="col-md-6 events-info">
                    <h3><span class="sub-tittle"><?=$r['no_berita'] ?></span><a href=".?hal=beritadetail&id=<?=$r['id_berita'] ?>" class="text-dark"><?=$r['judul_berita']?></h3><p><?=$r['konten_berita']?></p>
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
