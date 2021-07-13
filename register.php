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
<body style="background-color: #000;">
		<!-- Register page start -->
		<div class="register-page">
		    <div class="container-fluid">
		        <div class="row">
		            <div class="col-lg-4 col-md-5 cnt-bg-photo d-none d-xl-block d-lg-block d-md-block" style="background-image: url(assets/img/photozone.jpg)">
		                <div class="register-info">
		                        <img src="assets/img/logos/logo.png" alt="logo">
		                    </a>
		                    <p>Imagination is more important than Knowledge...Come and join us</p>
		                </div>
		            </div>
		            <div class="col-lg-8 col-md-7 col-sm-12 align-self-center">
		                <div class="content-form-box register-box">
		                    <div class="login-header"><h4>Create Your account</h4></div>
                        <?php
                        include("connection.php");

                        if(isset($_POST['but_upload'])){
                         
                          $phone = $_POST['phone'];
                          $password = $_POST['password'];
                          $email = $_POST['email'];
                          $username = $_POST['username'];
                          $id_no = $_POST['id_no'];
                          $name = $_FILES['file']['name'];
                          $target_dir = "profile/";
                          $target_file = $target_dir . basename($_FILES["file"]["name"]);

                          // Select file type
                          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

                          // Valid file extensions
                          $extensions_arr = array("jpg","jpeg","png","gif");

                          // Check extension
                          if( in_array($imageFileType,$extensions_arr) ){
                         
                            // Convert to base64 
                            $image_base64 = base64_encode(file_get_contents($_FILES['file']['tmp_name']) );
                            $profile_pic = 'data:image/'.$imageFileType.';base64,'.$image_base64;
                            // Insert record
                            $query = "insert into users(profile_pic,id_no,email,username,password,phone) values('".$profile_pic."','".$id_no."','".$email."','".$username."','".$password."','".$phone."')";
                            mysqli_query($con,$query);
                          
                            // Upload file
                            move_uploaded_file($_FILES['file']['tmp_name'],$target_dir.$name);
                            echo " registered succesfuly
                            <meta http-equiv='refresh' content='1;url=index.php' />";
                          }
                         
                        }
                        ?>

                        <form method="post" action="" enctype='multipart/form-data'>
                          <input type="number" name="phone" placeholder="Enter Your Phone" class="form-control"><br>
                          <input type="password" name="password" placeholder="Enter Your Password" required class="form-control"><br>
                          <input type="email" name="email" placeholder="Enter Your Email" required class="form-control"><br>
                          <input type="text" name="username" placeholder="Enter Your Username" class="form-control"><br>
                          <input type="number" name="id_no" placeholder="Enter Your Id Number" class="form-control"><br>
                          Choose a Profile Pic...<br>
                          <input type='file' name='file'  class="form-control" required ><br>
                          	<button type="submit" name="but_upload" class="btn btn-color btn-md">Create New Account</button>
		                    <div class="login-footer text-center">
		                    	<p>Already have an account?<a href="index.php"> Sign In</a></p>
		                    </div>
	                    </form>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>



		<!-- Register page end -->
</body>
</html>