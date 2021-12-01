<h1 class="mt-4">Selamat Datang</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Data stasistic </li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <?php
                $pesan = mysqli_query($conn,"SELECT * FROM pesan ");
                $jumlah_pesan = mysqli_num_rows($pesan);
            ?>
            <div class="card bg-primary mb-4">
                <div class="card-body">Jumlah Pesan <i class="fas fa-envelope fa-lg ml-5"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="text-white"><b><?php echo $jumlah_pesan ?></b></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <?php
                $komen = mysqli_query($conn,"SELECT * FROM komen ");
                $jumlah_komen = mysqli_num_rows($komen);
            ?>
            <div class="card bg-warning mb-4">
                <div class="card-body">Jumlah Komentar <i class="fas fa-comments fa-lg ml-5"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="text-white"><b><?php echo $jumlah_komen ?></b></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <?php
            $follow = mysqli_query($conn,"SELECT * FROM subscriber ");
            $jumlah_follow = mysqli_num_rows($follow);
            ?>
            <div class="card bg-success  mb-4">
                <div class="card-body">Jumlah Pengikut <i class="fas fa-users fa-lg ml-5"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="text-white"><b><?php echo $jumlah_follow ?></b></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <?php
                $user = mysqli_query($conn,"SELECT * FROM user ");
                $jumlah_user = mysqli_num_rows($user);
            ?>
            <div class="card bg-danger mb-4">
                <div class="card-body">Jumlah User <i class="fas fa-user fa-lg ml-5"></i>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="text-white align-text-center"><b> <?php echo $jumlah_user ?></b></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <?php
                $pesan = mysqli_query($conn,"SELECT * FROM agenda ");
                $jumlah_pesan = mysqli_num_rows($pesan);
            ?>
            <div class="card bg-primary mb-4">
                <div class="card-body">Jumlah Agenda <i class="fas fa-calendar-plus fa-lg ml-5"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="text-white"><b><?php echo $jumlah_pesan ?></b></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <?php
                $komen = mysqli_query($conn,"SELECT * FROM berita ");
                $jumlah_komen = mysqli_num_rows($komen);
            ?>
            <div class="card bg-warning mb-4">
                <div class="card-body">Jumlah Berita <i class="fas fa-newspaper fa-lg ml-5"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="text-white"><b><?php echo $jumlah_komen ?></b></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <?php
            $follow = mysqli_query($conn,"SELECT * FROM galery ");
            $jumlah_follow = mysqli_num_rows($follow);
            ?>
            <div class="card bg-success  mb-4">
                <div class="card-body">Jumlah Gallery <i class="fab fa-envira fa-lg ml-5"></i></div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="text-white"><b><?php echo $jumlah_follow ?></b></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <?php
                $user = mysqli_query($conn,"SELECT * FROM biodata ");
                $jumlah_user = mysqli_num_rows($user);
            ?>
            <div class="card bg-danger mb-4">
                <div class="card-body">Jumlah Biodata <i class="fas fa-building fa-lg ml-5"></i>
                </div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <div class="text-white align-text-center"><b> <?php echo $jumlah_user ?></b></div>
                </div>
            </div>
        </div>
    </div>