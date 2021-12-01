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
    <li class="breadcrumb-item active">
        <a href=".?hal=berita">Semua Berita</a>
    </li>
    <li class="breadcrumb-item active">Berita</li>
</ol>
<!---->
<!--// mian-content -->
<section class="ab-info-main py-md-5 py-4">
    <div class="container py-md-5 py-4">
        <h3 class="tittle text-center mb-lg-5 mb-3">Berita</h3>
        <div class="speak">
            <div class="row mt-lg-5 mt-4">
                <?php
                $sql = "SELECT * FROM berita where judul_berita='Rakor Strategi Komunikasi COVID-19 bagi Kepala Desa dan Tim Penggerak PKK' ";
                $q = mysqli_query($conn,$sql);
                while($r = mysqli_fetch_assoc($q)){
                ?>
                <div class="col-md-12 events-img">
                <img src="images/Berita_RakorCovid2.jpg" class="img-fluid" alt="user-image" />
                </div>
                <div class="col-md-12 events-info my-3">
                    <h3><span class="sub-tittle">03</span> <?=$r['judul_berita']?></h3>
                    <ul class="events-icons new-inf mt-md-4 mt-3 d-flex">
                        <li><a href="#"><span class="fa fa-user mx-1"></span></a> Dimas Dhasta</li>
                        <li><a href="#"><span class="fa fa-calendar mx-1"></span> <?=$r['tanggal']?></a></li>
                        <li><a href="#"><span class="fa fa-folder-open mx-1"></span> PKK</a></li>
                    </ul>
                </div>
                <p><?=$r['konten_detail']?></p>
                <?php } ?>
            </div>
            <ul class="social_section_1info">
                <li class="fallow">Follow Us :</li>
                <li class="google"><a href="https://bit.ly/2QEgLEN"><span class="fa fa-google-plus mr-1"></span> Google</a></li>
            </ul>
            <div class="single-form-left">
                <!-- contact form grid -->
                <div class="contact-single">
                    <h3><span class="sub-tittle">03</span> Leave a Reply</h3>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="contactcomment">Your Comment *</label>
                            <textarea name="xpesan" class="form-control border" rows="5" id="contactcomment" required=""></textarea>
                        </div>
                        <div class="d-sm-flex">
                            <div class="col-sm-6 form-group p-0">
                                <label for="contactusername">No Berita *</label>
                                <input type="text" name="xno" class="form-control border" id="contactusername" required="">
                            </div>
                            <div class="col-sm-6 form-group ml-sm-3">
                                <label for="contactemail">Email *</label>
                                <input type="email" name="xmail" class="form-control border" id="contactemail" required="">
                            </div>
                        </div>
                        <input type="submit" name="kirim" class="mt-3 btn btn-success btn-block py-3" value="Post your comment">
                        <?php
                            if (@$_POST['kirim']) {
                            $email  = $_POST['xmail'];
                            $pesan  = $_POST['xpesan'];
                            $no	    = $_POST['xno'];
                            mysqli_query($conn,"INSERT INTO komen(email,komen,no_berita)VALUES('$email','$pesan','$no')");
                            echo "<script>alert('Komentar Anda telah terkirim');location='.?hal=berita'</script>";
                            }
                            ?>
                    </form>
                </div>
                <!--  //contact form grid ends here -->
            </div>
            <div class="media py-5">
                <div>
                    <?php
                            $sql = "SELECT * FROM komen where no_berita='3' ";
                            $q = mysqli_query($conn,$sql);
                            while($r = mysqli_fetch_assoc($q)){
                    ?>
                        
                    <div class="media-body">
                    <img src="images/te2.jpg" class="mr-3 img-fluid rounded-circle" alt="image">
                        <h5 class="mt-0"><?=$r['email']?></h5>
                        <p class="mt-2"><?=$r['komen']?></p>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>