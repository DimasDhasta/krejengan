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
                            <li><a href=".?hal=berita"><b>Berita</b></a></li>
                        </ul>
                    </li>
                    <li><a href=".?hal=galery"><b>Gallery</b></a></li>
                    <li class="active"><a href=".?hal=kontak"><b>Contact</b></a></li>
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
    <li class="breadcrumb-item active">Contact Us</li>
</ol>
<!---->
<!--// mian-content -->
<!-- banner -->
<section class="ab-info-main py-md-5 py-4">
    <div class="container py-md-5 py-4">
        <h3 class="tittle text-center mb-lg-5 mb-3">Contact Us</h3>
        <div class="row contact-main-info">
            <div class="col-md-6 contact-right">
                <form action="" method="post">
                    <input type="email" class="email" name="xmail" placeholder="Enter Email" required="" style="border : 1px solid orange; border-radius: 10px;">
                    <textarea name="xpesan" placeholder="Type your message here" required="" style="border : 1px solid orange; border-radius: 10px;"></textarea>
                    <div class="read mt-3">
                        <input type="submit" name="kirim" class="btn submit" style="background-color: orange;" value="Send">
                    </div>
                    <?php
                            if (@$_POST['kirim']) {
                            $email   = $_POST['xmail'];
                            $pesan    = $_POST['xpesan'];
                            $tgl	= date("Y-m-d");
                            mysqli_query($conn,"INSERT INTO pesan(email,pesan,tanggal)VALUES('$email','$pesan','$tgl')");
                            echo "<script>alert('Terima kasih atas kritik dan pesan anda');location='.?hal=kontak'</script>";
                            }
                    ?>
                </form>
            </div>
            <div class="col-md-6 contact-left">
                <div class="address">
                    <h5>Address:</h5>
                    <p><span class="fas fa-map-marker-alt fa-lg" style="color: orange;"></span> Jl. Raya Karangren No. 5 Probolinggo
                        </p>
                </div>
                <div class="address address-mdl">
                    <h5>Phones:</h5>
                    <p><span class="fas fa-phone-alt fa-lg" style="color: orange;"></span> (0335) 844 319</p>
                </div>
                <div class="address">
                    <h5>Email:</h5>
                    <p><span class="far fa-envelope fa-lg" style="color: orange;"></span> <a href="mailto:kecamatankrejengan@gmail.com"> kecamatankrejengan@email.com</a></p></div>
            </div>
        </div>


    </div>
</section>
<section class="map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3433.015904031505!2d113.4154390143767!3d-7.804865079644471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd6ff9214e58831%3A0x62f09b14b9fa63c3!2sKantor%20Kecamatan%20Krejengan!5e1!3m2!1sid!2sid!4v1633343812371!5m2!1sid!2sid"  style="border: 2px;;" allowfullscreen></iframe>
</section>