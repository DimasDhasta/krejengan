<?php
     include "admin/koneksi.php";
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Kecamatan Krejengan</title>
    <link rel="icon" type="images/png" href="gambar/20210422_085954.png">
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Corp Group Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script>
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }

    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Bootstrap-Core-CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <link href="css/all.css" rel="stylesheet" type="text/css" media="all"> <!--load all styles -->
    <!-- Style-CSS -->
    <!-- font-awesome-icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/fontawesome2.css" rel="stylesheet">
    <!-- //font-awesome-icons -->
    <!-- /Fonts -->
   <link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,800" rel="stylesheet">
   <!-- datatable -->
   <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        
    <!-- //Fonts -->
    <!-- Fontawesome upgrade -->
    <link href="css/all2.css" rel="stylesheet"> <!--load all styles -->
    <script defer src="js/all.js"></script>
    <!-- Our project just needs Font Awesome Solid + Brands -->
    <link href="css/fontawesome.css" rel="stylesheet">
    <link href="css/brands.css" rel="stylesheet">
    <link href="css/solid.css" rel="stylesheet">
    <!-- Our project just needs Font Awesome Solid + Brands -->
    <script defer src="js/brands.js"></script>
    <script defer src="js/solid.js"></script>
    <script defer src="js/fontawesome.js"></script>

</head>

<body>


        <?php
          $hal = @$_GET['hal'];
          $beranda = "hal/beranda.php";
          $p = "hal/$hal.php";
          if(!empty($hal) && file_exists($p)){
              include "$p";
          }else{
              include "$beranda";
          }
      ?>
        <!--footer -->
    <footer>
        <section class="footer footer_1its py-5">
            <div class="container py-md-4">
                <div class="row footer-top mb-md-5 mb-4">
                    <div class="col-lg-4 col-md-6 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Address</h3>
                        </div>
                        <div class="footer-text">
                            <p>Address : Jl. Raya Karangren No. 5 Probolinggo</p>
                            <p>Phone : (0335) 844 319</p>
                            <p>Email : <a href="mailto:kecamatankrejengan@gmail.com">kecamatankrejengan@gmail.com</a></p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-md-0 mt-4 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Quick Links</h3>
                        </div>
                        <div class="row">
                            <ul class="col-6 links">
                                <li><a href=".">Home </a></li>
                                <li><a href=".?hal=agenda">Agenda </a></li>
                                <li><a href=".?hal=berita">Berita</a></li>
                              <li><a href=".?hal=galery">Gallery</a></li>
                                <li><a href=".?hal=kontak">Contact </a></li>
                            </ul>
                            <ul class="col-6 links">
                                <li><a href=".?hal=profil">Profil </a></li>
                                <li><a href=".?hal=pegawaikecamatan">Data Pegawai </a></li>
                                <li><a href=".?hal=datawilayah">Data Wilayah </a></li>
                                <li><a href=".?hal=datadesa">Data Desa </a></li>
                                <li><a href=".?hal=datakades">Data Kades </a></li>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 mt-lg-0 mt-4 col-sm-12 footer-grid_section_1its">
                        <div class="footer-title-w3ls">
                            <h3>Newsletter</h3>
                        </div>
                            <form action="" method="post" style="border: none;">
                                <input type="email" class="email" name="mael" placeholder=" Enter your email" required="" style="background-color: #1e272e; border:2px solid orange; border-radius: 5px; padding: 5px ;">
                                <input type="submit" name="kirim" class="btn btn-warning " value="Send your mail">
                                <?php
                                        if (@$_POST['kirim']) {
                                        $email   = $_POST['mael'];
                                        $tgl     = date('Y-m-d');
                                        mysqli_query($conn,"INSERT INTO subscriber(email,tanggal)VALUES('$email','$tgl')")or die (mysqli_error($conn));
                                        echo "<script>alert('Terima kasih atas dukungan anda');location='.'</script>";
                                        }
                                ?>
                            </form>
                    </div>
                </div>
                <div class="move-top-w3layouts text-center mt-3">
                    <a href="#home" class="move-top"> <span class="fa fa-angle-up fa-lg" aria-hidden="true"></span></a>
                </div>
            </div>
        </section>
    </footer>
    <!-- //footer -->

    <!-- copyright -->
    <div class="cpy-right text-center py-3">
        <p class="">© 2021 Kecamatan Krejengan. Allrights reserved
            <a href="http://w3layouts.com"> </a>
        </p>
    </div>
    <!-- //copyright -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="admin/dist/js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="admin/dist/assets/demo/chart-area-demo.js"></script>
        <script src="admin/dist/assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
        <script src="admin/dist/assets/demo/datatables-demo.js"></script>
</body>

</html>
