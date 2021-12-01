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
                            <li class="active"><a href=".?hal=agenda"><b>Agenda</b></a></li>
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
<!-- //header -->
<!--// mian-content -->
<!---->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href=".">Home</a>
    </li>
    <li class="breadcrumb-item active">Agenda</li>
</ol>
<!---->
<!--// mian-content -->
<!-- banner-bottom-wthree -->
<section class="banner-bottom-wthree py-5" id="about">
    <div class="container py-md-3">
        <div class="header text-center">
            <h3 class="tittle mb-lg-5 mb-3">Agenda</h3>
        </div>
        <div class="row service-grid-grids text-center pt-lg-5 mt-3">
            <?php
                    $sql = "SELECT * FROM agenda order by id_agenda desc";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
            ?>
            <div class="col-lg-4 col-md-6 service-grid service-grid1">
                <div class="service-icon" style="color: orange;" >
                    <span class="fas fa-calendar-plus fa-3x" aria-hidden="true"></span>
                </div>
                <h4 class="mt-3"><?=$r['tanggal']?></h4>
                <p class="mt-3"><?=$r['judul_agenda']?></p>
            </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- //banner-bottom-wthree -->