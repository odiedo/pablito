<?php
include('connection.php');
    //start sessions
ini_set('session.gc_maxlifetime', 1440); 

//Output just to make sure config was changed.

    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>MSU_SOCIAL</title>
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
    <link type="text/css" rel="stylesheet" href="assets/css/map.css">
    <link type="text/css" rel="stylesheet" href="assets/css/jquery.mCustomScrollbar.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="assets/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">
</head>
<body style="background-color: #000;">
<!-- main header start -->
<header class="main-header sticky-header" id="main-header-2" >
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="navbar fixed-top navbar-expand-lg  navbar-dark rounded" style="background-color: #000; color: white;">
                    <table style="width:100%; box-shadow: 0 10px 18px 0 rgba(0, 100, 100, 0.7);">
                        <tr >
                            <td align="center">
                                <?php
                                    $user = $_SESSION['username'];
                                    $qq=mysqli_query($con,"select `user_id` from users where `username`='$user'");
                                        while ($res = mysqli_fetch_assoc($qq)) {    
                                            $id = $res['user_id'];
                                        if (isset($id) == true) {
                                            $qq1 = mysqli_query($con, "select * from users where `user_id` = '$id'");
                                            while($res1 = mysqli_fetch_assoc($qq1)){
                                                $userid = $res1['user_id'];
                                                $username = $res1['username'];
                                                $name = $res1['email'];
                                                $profile = $res1['profile_pic'];
                                                echo "
                                                <a href='include/trial/trial3.php?name=$username' style='color:red;'>
                                                <i class='fa fa-user'></i>                            
                                                <br><h6 style='color:red;font-size:9px;'>p r o f i l e</h6>
                                                </a>
                                                ";

                                                }
                                            }
                                        }
                                    ?>
                            </td>                            
                    
                            <td align="center"><a href="index1.php" style="color: white;"><i class="fa fa-home"></i>
                                <br><h6 style="color:white;font-size:9px;">h o m e</h6>
                            </a></td>
                            <td align="center"><a href="add_new_post.php" style="color: white;"><i class="fa fa-edit"></i>
                                <br><h6 style="color:white;font-size:9px;">p o s t</h6>
                            </a></td>
                            <td align="center"><a href="logout.php" style="color: white;"><i class="flaticon-logout" ></i>
                                <br><h6 style="color:white;font-size:9px;">l o g o u t</h6>
                            </a></td>
                        </tr>                        
                    </table>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- main header end -->