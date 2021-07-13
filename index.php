<!DOCTYPE html>
<html>
<head>
	<title>MSU Social</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/magnific-popup.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.selectBox.css">
    <link type="text/css" rel="stylesheet" href="assets/css/dropzone.css">
    <link type="text/css" rel="stylesheet" href="assets/css/rangeslider.css">
    <link type="text/css" rel="stylesheet" href="assets/css/animate.min.css">
    <link type="text/css" rel="stylesheet" href="assets/css/leaflet.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css">
    <link type="text/css" rel="stylesheet" href="assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">
    <style type="text/css">
input[type="text"],input[type="password"]{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 30px;
    color: white;
    font-size: 14px;
    width: 100%;
}
</style>
  </head>
</head>
<body bgcolor="#000">
<!-- Login page start -->
<div class="login-page"  style="background-color: #000;">
    <div class="container-fluid"  style="background-color: #000;">
        <div class="row" style="background-color: #000;">
            <div class="col-xl-8 col-lg-8 col-md-7 overview-bgi cnt-bg-photo cnt-bg-photo-2 d-none d-xl-block d-lg-block d-md-block" style="background-image: url(assets/img/3.jpg)">
                <div class="login-info">
                    <h3>We make it happen</h3>
                    <p>We all die. The goal isnt to live forever, The goal is to create something that will live forever</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-5 content-box p-hdn" style="background-color: #000;">
                <div class="content-form-box">
                    <img src="assets/img/logos/logo.png" style="width: 300px; height: 200px;">
                    <p style="color:white;">Enter username and password to login</p>
                    <form action="loginsession.php" method="post">
                        
                            <input type="text"  name="username" placeholder="username">
                        <br><br>
                            <input type="Password"  name="password" placeholder="password">
                        <br><br>
                        <button type="submit" class="btn btn-color btn-md" onmousedown="login()">Login</button>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-color btn-md" onclick="window.location.href='forgot-password.php'">Forgot Password</button>
                        </div>

                    </form>
                </div>

                <div class="login-footer clearfix">
                    <div class="pull-left">
                        <a href="index.php"><img src="assets/img/logos/logo.png" alt="logo"></a>
                    </div>
                    <div class="pull-right">
                        <p>Don't have an account?<a href="register.php"> Sign Up Now</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login page end -->

</body>
</html>