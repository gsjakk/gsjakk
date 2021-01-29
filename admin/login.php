<?php
session_start();
$koneksi = new mysqli("localhost","root","","gsja");
?>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign In | Admin</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugin/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugin/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugin/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);"><b>GSJA</b></a>
            <small>Kristus Kekal Pucangsawit</small>
        </div>
        <div class="card">
            <div class="body">
                <form method="post" action="cek.php">
                    <div class="msg">Selamat Datang Admin, Silahkan Login</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="username" placeholder="Nama" required autofocus  autocomplete="off">
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" placeholder="Password" required  autocomplete="off">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <label for="rememberme">Pastikan data anda benar.</label>
                        </div>
                        <div class="col-xs-4">
                            <button class="btn btn-block bg-pink waves-effect" type="submit" value="Login">SIGN IN</button>
                        </div>
                    </div>
                </form>
				<!-- <?php
			//	if (isset($_POST["login"]))
			//	{
			//		$email 		= $_POST["nama_pelanggan"];
			//		$password 	= $_POST["password_pelanggan"];
			//		$ambil 		= $koneksi->query("SELECT * FROM pelanggan WHERE email_pelanggan='$email' AND password_pelanggan='$password'");
					
			//		$akunyangcocok = $ambil->num_rows;
					
			//		if($akunyangcocok==1)
			//		{
			//			$akun = $ambil->fetch_assoc();
			//			$_SESSION["pelanggan"] = $akun;
			//			echo" <script>alert('Anda Berhasil Login');</script>";
			//			echo" <script>location='checkout.php';</script>";
			//		}
			//		else
			//		{
			//			echo" <script>alert('Anda Gagal Login');</script>";
			//			echo" <script>location='login.php';</script>";
			//		}
			//	}
				
				?> -->
            </div>
        </div>
    </div>

  <!-- Jquery Core Js -->
    <script src="plugin/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugin/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugin/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugin/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
</body>

</html>