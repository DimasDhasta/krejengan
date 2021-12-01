<?php include 'admin/koneksi.php'; ?>
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
    <li class="breadcrumb-item active">
        <a href=".?hal=berita">Semua Berita</a>
    </li>
    <li class="breadcrumb-item active">Berita</li>
</ol>
<!---->
<!--// mian-content -->
<section class="ab-info-main py-md-5 py-4">
    <div class="container py-md-5 py-4">
        <h3 class="tittle text-center mb-lg-3 mb-3">Berita
            <div class="col-md-12 mt-4 events-img">
            <?php
                $id     = $_GET['id'];
                if (isset($_GET['id'])) { 
                $sql    = "SELECT * FROM berita WHERE id_berita = '$id'";
                $q      = mysqli_query($conn,$sql);
                $r      = mysqli_fetch_array($q); {
            ?>
                <img src="gambar/<?=$r['gambar']?>" class="img-fluid" alt="user-image" />
                <?php } } ?>
            </div>
        </h3>
        <div class="speak">
            <div class="row mt-lg-5 mt-4">
            <?php
                $id     = $_GET['id'];
                if (isset($_GET['id'])) { 
                $sql    = "SELECT * FROM berita WHERE id_berita = '$id'";
                $q      = mysqli_query($conn,$sql);
                $r      = mysqli_fetch_array($q); {
            ?>
                <div class="col-md-12 events-info my-3">
                    <h3><span class="sub-tittle"><?=$r['no_berita']?></span> <?=$r['judul_berita']?></h3>
                    <ul class="events-icons new-inf mt-md-4 mt-3 d-flex">
                        <li><a href="#"><span class="fa fa-user mx-1"></span></a> Dimas Dhasta</li>
                        <li><a href="#"><span class="fa fa-calendar mx-1"></span> <?=$r['tanggal']?></a></li>
                        <li><a href="#"><span class="fa fa-folder-open mx-1"></span> Kesejahteraan Rakyat</a></li>
                    </ul>
                </div>
                <p><?=$r['konten_detail']?></p>
            <?php } } ?>
            </div>
            <ul class="social_section_1info">
                <li class="fallow">Follow Us :</li>
                <li class="google"><a href="mailto:kecamatankrejengan@gmail.com"><span class="fab fa-google-plus fa-lg"></span> Google</a></li>
            </ul>
            <div class="single-form-left">
                <!-- contact form grid -->
                <div class="contact-single">
                    <h4><span class="sub-tittle mb-2"><?=$r['no_berita']?></span> //Tinggalkan komentar Anda</h4>
                    <form action="" method="post" class="mt-2">
                        <div class="d-sm-flex">
                            <div class="col-sm-6 form-group p-0">
                                <label for="contactusername">Nama *</label>
                                <input style="border: 1px solid orange;" type="text" name="xnama" class="form-control border" id="contactemail" required="" style="border : 1px solid orange; border-radius: 10px;" >
                            </div>
                            <div class="col-sm-6 form-group ml-sm-3">
                                <label for="contactemail">Email *</label>
                                <input type="email" name="xmail" class="form-control border" id="contactemail" required="">
                            </div>
                        </div>
                        <div class="form-group">
                             <?php
                                    $sql    = "SELECT * FROM berita WHERE id_berita = '$id'";
                                    $q      = mysqli_query($conn,$sql);
                                    $r      = mysqli_fetch_array($q);
                                ?>
                            <label class="small mb-1">No. Berita *</label>
                            <input name="xno" class="form-control py-3" type="number"  value="<?=$r['no_berita'] ?>"/>
                        </div>
                        <div class="form-group">
                            <label for="contactcomment">Your Comment *</label>
                            <textarea name="xpesan" class="form-control border" rows="5" id="contactcomment" required=""  ></textarea>
                        </div>
                        
                        <input type="submit" name="kirim" class="mt-3 btn btn-success btn-block py-3" value="Post your comment">
                        <?php
                            if (@$_POST['kirim']) {
                            $email  = $_POST['xmail'];
                            $pesan  = $_POST['xpesan'];
                            $nama   = $_POST['xnama'];
                            $no	    = $_POST['xno'];
                            $tgl     = date('Y-m-d');
                            mysqli_query($conn,"INSERT INTO komen(email,komen,nama,noberita,tanggal)VALUES('$email','$pesan','$nama','$no','$tgl')");
                            echo "<script>alert('Komentar Anda telah terkirim');location='.?hal=beritadetail&id=".$id."'</script>";
                            }
                            ?>
                    </form>
                </div>
                <!--  //contact form grid ends here -->
            </div>
            <!-- KOMENTAR BERITA -->
            <div class="">
                <h4 class="mt-5">//Semua Komentar</h4>
                <?php
                                $sql    = "SELECT * FROM komen INNER JOIN berita ON komen.noberita = berita.no_berita where id_berita = '$id' order by id_k desc";
                                $q      = mysqli_query($conn,$sql);
                                while ($r = mysqli_fetch_array($q)) {
                    ?>
                <div class="list-group mt-3" style="border: 1px solid #6c757d; border-radius:10px; border-left:5px solid #198754"> 
                
                    <div class="d-flex w-100 justify-content-between ">
                        <h5 class="mb-1 mt-2 ml-2"><?=$r ['nama'] ?> </h5>
                        <small class="mt-2 mr-2">[ <?=$r['tanggal']?> ] </small>
                    </div>
                        <p class="mb-1 mt-1 ml-2"><?=$r['komen']?></p>
                        <small></small>
                </div>
                    <?php } ?>
            </div>
            <!-- END KOMENTAR BERITA -->
        </div>
    </div>
</section>