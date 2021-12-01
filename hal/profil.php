<?php
    $sql    = "SELECT * FROM biodata order by id_biodata limit 1";
    $q      = mysqli_query($conn,$sql);
    $r      = mysqli_fetch_assoc($q);
?>
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
                            <li  class="active"><a href=".?hal=profil"><b>Profil</b></a></li>
                            <li><a href=".?hal=pegawaikecamatan"><b>Data Pegawai Kecamatan</b></a></li>
                            <li><a href=".?hal=datawilayah"><b>Data Wilayah</b></a></li>
                            <li><a href=".?hal=datadesa"><b>Data Desa</b></a></li>
                            <li><a href=".?hal=datakades"><b>Data Kades</b></a></li>
                        </ul>
                    </li>
                    <li>
                        <!-- First Tier Drop Down -->
                        <label for="drop-2" class="toggle">Content <span class="fa fa-angle-down" aria-hidden="true"></span> </label>
                        <a href="#"><b>Content</b> <span class="fa fa-angle-down" aria-hidden="true"></span></a>
                        <input type="checkbox" id="drop-2" />
                        <ul>
                            <li><a href=".?hal=agenda"><b>Agenda</b></a></li>
                            <li><a href=".?hal=berita"><b>Berita</b></a></li>
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
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href=".">Home</a>
    </li>
    <li class="breadcrumb-item active">Profil</li>
</ol>
<!---->
<!--// mian-content -->
<!-- banner-bottom-wthree -->
<section class="banner-bottom-wthree py-5" id="about">
    <div class="container py-md-5">
        <div class="row banner-grids">
            <div class="col-lg-7 content-left-bottom text-left ">
                <h3 class="tittle text-capitalize text-left my-md-2"> Profil Kecamatan Krejengan </h3>
                <p class="mt-2 text-left">Kecamatan atau yang disebut dengan nama lain adalah bagian wilayah dari Kabupaten/Kota yang dipimpin oleh camat. Kelurahan adalah bagian wilayah dari kecamatan sebagai perangkat kecamatan.</p>
                <h4 class="tittle text-capitalize text-left my-md-1"> Visi & Misi Kecamatan Krejengan </h4>
                <p class="mt-2 text-left"><b>Visi :</b><?=$r['visi'] ?></p>
                <p class="mt-2 text-left"><b>Misi :</b><?=$r['misi'] ?></p>
            </div>
            <div class="col-lg-5 content-right-bottom text-left">
                <img src="gambar/<?=$r['logo_perusahaan']?>" alt="news image" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="container py-md-2">
        <div class="row service-grid-grids text-center pt-lg-3 mt-2">
            <div class="col-lg-4 col-md-3 service-grid service-grid1">
                <div class="service-icon">
                    <span class="fa fa-user-tie fa-3x" style="color: orange;" aria-hidden="true"></span>
                </div>
                <h4 class="mt-3">Camat</h4>
                <p class = "mt-2"><?=$r ['nama_pimpinan'] ?></p>
            </div>
            <div class="col-lg-4 col-md-6 service-grid service-grid2 mt-md-0 mt-2">
                <div class="service-icon">
                    <span class="fas fa-map-marker-alt fa-3x" style="color: orange;" aria-hidden="true"></span>
                </div>
                <h4 class="mt-3">Alamat</h4>
                <p class="mt-2"><?=$r['alamat']?></p>
            </div>
            <div class="col-lg-4 col-md-6 service-grid service-grid3 mt-lg-0 mt-2">
                <div class="service-icon">
                    <span class="fas fa-phone-alt fa-3x" style="color: orange;" aria-hidden="true"></span>
                </div>
                <h4 class="mt-3">Telp.</h4>
                <p class="mt-2"><?=$r['telepon']?>.</p>
            </div>
        </div>
    </div>
</section>
<img src="images/struktur.jpg" class="img-fluid img-thumbnail" alt="Responsive image">
<section class="banner-bottom py-lg-5 py-4">
    <div class="container">
        <div class="inner-sec py-lg-5 py-4">
            <h3 class="tittle text-center my-lg-5 my-3">Pegawai Kecamatan</h3>
            <div class="row mt-lg-5 mt-4">
            <?php
                        $sql = "SELECT * FROM staf order by id_sk limit 8";
                        $q = mysqli_query($conn,$sql);
                        while($r = mysqli_fetch_assoc($q)){
                    ?>
                <div class="col-md-4 team-gd second text-center mb-4">
                    
                    <div class="team-img mb-4">
                        <img src="gambar/<?=$r['foto']?>" class="img-fluid rounded-circle" alt="user-image">
                    </div>
                    <div class="team-info">
                        <h3 class="mt-md-4 mt-3"> <?=$r['nama']?></h3>
                        <p><?=$r['jabatan']?></p>
                        <ul class="social_section_1info mt-md-4 mt-3">
                            <li class="mb-2 email"><a href="mailto:<?=$r['email']?>"><i class="far fa-envelope"></i> email</a></li>
                            <li class="mb-2 whatsapp"><a href="https://wa.me/<?=$r['telepon']?>"><span class="fab fa-whatsapp mr-1"></span>whatsapp</a></li>
                        </ul>
                    </div>
                </div>
                    <?php } ?>
            </div>
        </div>
    </div>
</section>