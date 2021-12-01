<!-- mian-content -->
<!-- //header -->
<div class="banner-content inner" id="home">
    <!-- header -->
    <header class="header">
        <div class="container-fluid px-lg-5">
            <!-- nav -->
            <nav class="py-4">
                <div id="logo">
                    <h1> <a href="index.html">Kecamatan Krejengan</a></h1>
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
                            <li><a href=".?hal=berita"><b>Berita</b></a></li>
                        </ul>
                    </li>
                    <li  class="active"><a href=".?hal=galery"><b>Gallery</b></a></li>
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
    <li class="breadcrumb-item active">Gallery</li>
</ol>
<!---->
<!--// mian-content -->
<!-- Gallery -->
<section class="gallery py-5" id="gallery">
    <div class="container py-md-5">
        <div>
        <div class="header text-center">
            <h3 class="tittle mb-lg-5 mb-3">Gallery</h3>
        </div>            
        <div class="row news-grids text-center gallery-wrap">
            <?php
                $sql = "SELECT * FROM galery order by id_galery desc ";
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
        <!-- popup-->
        <div id="#gal" class="pop-overlay animate">
            <?php
                $id     = $_GET['id'];
                $sql    = "SELECT * FROM galery WHERE id_galery = '$id'";
                $q      = mysqli_query($conn,$sql);
                $r      = mysqli_fetch_assoc($q);
            ?>
            <div class="popup">
                <img src="gambar/<?=$r['gambar']?>" alt="Popup Image" class="img-fluid" />
                <p class="mt-2"><b><?=$r['judul_galery']?></b></p>
                <a class="close" href="#gallery">&times;</a>
           
            </div>
        </div>
        <!-- //popup -->
    </div>
</section>
<!--// gallery -->