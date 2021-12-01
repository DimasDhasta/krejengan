<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
    session_start();
    include "koneksi.php";
    if(!empty($_SESSION['iduser'])){
        echo "<script>location='.'</script>";
    }else{
        if(@$_POST['login']){
            $user = $_POST['txtuser'];
            $pass = md5($_POST['txtpassword']);

            $sql = "SELECT * FROM user WHERE username = '$user' AND password = '$pass'";
            $q = mysqli_query($conn,$sql);
            if(mysqli_num_rows($q) >0){
                $r = mysqli_fetch_assoc($q);
                $_SESSION['iduser'] = $r['id_user'];
                $_SESSION['namauser'] = $r['nama_user'];
                echo "<script>location='.'</script>";
            }else{
                echo "<script>alert('Data yang dimasukkan salah');location='login4.php'</script>";
            }
        }
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
    <title>LOGIN_USER</title>
    <link rel="icon" type="images/png" href="login/images/admin.png">
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Latest Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->

	<!-- css files -->
	<link rel="stylesheet" href="login/css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link href="login/css/font-awesome.min.css" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
</head>
<style>img[alt="www.000webhost.com"]{display:none;}</style>
<body>
	<div class="main-bg">
		<!-- title -->
		<h1>
        </h1>
		<!-- //title -->
		<!-- content -->
		<div class="sub-main-w3">
			<div class="bg-content-w3pvt">
				<div class="top-content-style">
					<img src="login/images/admin.png" alt="" />
				</div>
				<form method="post" action="">
                    <p class="legend">Login Here</p>
                    
					<div class="input">
						<input name="txtuser" type="text" class="form-control" placeholder="Username"  >
						<span class="fa fa-user"></span>
                    </div>
                    
					<div class="input">
						<input name="txtpassword" type="password" class="form-control" placeholder="Password">
						<span class="fa fa-unlock-alt"></span>
                    </div>
                    
                    <div>
                    <button name="login" type="submit" value="Login" class="btn submit">
						<span class="fa fa-sign-in"></span>
					</button>
                    </div>
                </form>
                <a href="#" class="bottom-text-w3ls"></a>
			</div>
		</div> 
		<!-- //content -->
		<!-- copyright -->
		<div class="copyright">
			<h2>
			</h2>
		</div>
		<!-- //copyright -->
	</div>
</body>
</html>
<?php } ?>