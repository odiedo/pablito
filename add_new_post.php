<?
    ini_set('session.gc_maxlifetime', 1440); 
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

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="assets/css/skins/default.css">
</head>
<body style="background-color:#000;">
<?php include('header.php');?>

<div class="container">
    <div class="row" style="margin-top:100px; background-color: #000;">
        <div class="col-md-7 col-lg-8 col-sm-12 align-self-center card bg-transparent" style="box-shadow: 0 10px 18px 0 rgba(100, 0, 0, 0.7); border: 1px solid red;">
            <div class="card-header text-info">
                <i class="fa fa-image"></i> add post here
            </div>
            <div class="card-body text-info">
                <form method="post" action="" enctype='multipart/form-data'>
                    <input type='file' name='file' class="form-control border-top-0 border-right-0 border-left-0 border-info bg-transparent"><br>
                    <input type="text" name="caption" placeholder="Input caption to Your Pic" class="form-control border-top-0 border-right-0 border-left-0 border-info bg-transparent"><br>
                    <input type='submit' value='Upload' name='but_upload' class="form-control" style="border: 1px solid red">
                </form>
            </div>
        </div>
    </div>
</div>


<?php
include("config.php");
    if(isset($_POST['but_upload'])){
        $file_uploader = $_SESSION['username'];
        $date = date('Y-m-d H:i:s');
        $caption = $_POST['caption'];
        $name = $_FILES['file']['name'];
        $target_dir = "upload/";
        $target_file = $target_dir . basename($_FILES["file"]["name"]);

        // Select file type
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Valid file extensions
        $extensions_arr = array("jpg","jpeg","png","gif");

        // Check extension
        if( in_array($imageFileType,$extensions_arr) ){
            // Convert to base64 
            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
            $image = 'data:image/'.$imageFileType.';base64,'.$image_base64;
            // Insert record
            $query = "INSERT into images(image,caption, file_uploader,date) values('".$image."','".$caption."','".$file_uploader."','".$date."')";
            mysqli_query($con,$query);
            // Upload file
            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
        }
    }
?>
</body>
</html>