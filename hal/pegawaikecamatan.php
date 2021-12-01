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
                            <li  class="active"><a href=".?hal=pegawaikecamatan"><b>Data Pegawai Kecamatan</b></a></li>
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
<!-- //header -->
<!--// mian-content -->
<!---->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href=".">Home</a>
    </li>
    <li class="breadcrumb-item active">Data Pegawai Kecamatan</li>
</ol>
<div  class="ml-3 mt-2">
    <h3>Pegawai di Kecamatan Krejengan</h3>
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
<div  class="ml-3 mt-2">
    <h3>Data ASN di Kecamatan Krejengan</h3>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
            <thead class="bg-warning">
                <tr style="text-align: center;">
                    <th width="10%">No.</th>
                    <th width="30%">Nama ASN</th>
                    <th width="20%">Jabatan</th>
                </tr>
            </thead>
            <tbody style="text-align: center;">
             <?php
                    $no = 1;
                    $sql = "SELECT * FROM staf";
                    $q = mysqli_query($conn,$sql);
                    while($r = mysqli_fetch_assoc($q)){
                ?>
                <tr>
                    <td><?=$no++?>.</td>
                    <td><?=$r['nama']?></td>
                    <td><?=$r['jabatan']?></td>
                </tr>
                <?php } ?>
            </tbody> 
        </table>
    </div>
</div>
