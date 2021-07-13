<?php
include ('header.php');
include 'DBController.php';
$db_handle = new DBController();
?>
<!DOCTYPE html>
<html lang="zxx">
<body style="background-color: #000; color: white;">
<?php 
if (isset($_GET['name'])) {
    $user = mysqli_real_escape_string($conn , $_GET['name']);
    $query = "SELECT * FROM users WHERE username = '$user' ";
    $run_query = mysqli_query($conn, $query) or die(mysqli_error($conn)) ;
    if (mysqli_num_rows($run_query) > 0 ) {
    while ($row = mysqli_fetch_array($run_query)) {
	$name = $row['username'];
	$email = $row['email'];
	$phone = $row['phone'];
	$profile_pic = $row['profile_pic'];
    }
}
else {
	$name = "N/A";
	$email = "N/A";
	$course = "N/A";
	$role = "N/A";
	$bio = "N/A";
	$image = "profile.jpg";
    $gender = "N/A";
    $joindate = "N/A";
}

?>
<br><br><br><br>
<div class="container">
  <div class="row">
        <div class="col-md-4">
            <div class="container" style="position:  -webkit-sticky; position: sticky; top: 0;">
            <!-- Profile Image -->
                <div class="card card-primary card-outline" style="background-color: rgba(0,0,0,.5);box-shadow: 0 10px 18px 0 rgba(0, 100, 100, 0.7);padding-top: 10%;">
                  <div class="card-body box-profile">
                    <div class="text-center">
                      <img data-toggle="modal" data-target="#Modal" class="profile-user-img img-fluid img-circle"
                           src="<?php echo $profile_pic; ?>"
                           alt="User profile picture" style="height: 150px; width: 150px; border-radius: 50%;">
                    </div>

                    <h3 class="profile-username text-center"><?php echo $name; ?></h3>

                    <p class="text-muted text-center">Software Engineer</p>
                    <b class="text-info">Type: </b> <small class="float-right text-light">Student</small><br>
                    <b class="text-info">Area: </b> <small class="float-right text-light">Roadblock</small><br>
                    <b class="text-info">Phone: </b> <small class="float-right text-light"><?php echo $phone; ?></small><br>
                    <b class="text-info">Email: </b> <small class="float-right text-light"><?php echo $email; ?></small><br>


                    <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
                  </div>
                  <!-- /.card-body -->
                </div>
            <!-- /.card -->            
            </div>
        </div>    
    <div class="col-md-8">
      <div class="card-header border-info" style="background-color: #000;">
        <div class="card-title text-center" style="font-size: 24px; font-family: serif; color: red;">
          <i class="fa fa-cog text-left"></i> <i> Manage your posts</i>
        </div>
      </div>
        <div class="row bg-transparent">
            <div class="col-lg-8 offset-lg-2">
                <div id="faq" class="faq-accordion">
                    <div class="card m-b-0">
                        <div class="card-header" style="background-color: #000; color: white;">
                            <a class="card-title collapsed text-info" data-toggle="collapse" data-parent="#faq" href="#collapse1">
                              My social media Posts
                            </a>
                        </div>
                        <div id="collapse1" class="card-block collapse"  style="background-color: #000; color: white;">
                            <?php
                            $query = $db_handle->runQuery("SELECT * FROM images where file_uploader = '$user' ");
                            if (! empty($query)) {
                                foreach ($query as $key => $value) {
                                    ?>  
                                <div class="image">
                                    <div class="property-box-8">
                                      <div class="property-photo">
                                        <img src="<?php echo $query[$key]["image"] ; ?>" style="width: 120px; height: 120px;"/>
                                      </div>
                                    </div>
                                    <h6 style="font-style: italic; font-size: 11px; color: white; font-family: Bell MT;" > <?php echo $query[$key]['likes']; ?> <i class="fa fa-thumbs-up"></i> <?php echo $query[$key]['comments']; ?> <i class="fa fa-comments"></i></h6>    
                                    <?php
                                      $postid = $query[$key]['post_id'];
                                      echo "<a onClick=\"javascript: return confirm('Are you sure you want to delete this post?')\" href='trial3.php?delete=$postid' style='font-size:11px;'><i class='fa fa-times fa-lg'></i>delete</a>";
                                      ?>
                                </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<br><br>
<div class="container">
  <div class="row">
    <div class="col-md-12 text-alert">
      N/B:- After you have deleted your posts, you will have to refresh for changes to be made.
    </div>
  </div>
</div>






    </div>
</div>
<hr style="background-color: white;">
<div style="padding-left: 1px; font-size: 10px; color: yellow">N/B:- After you have deleted your posts, you will have to refresh this page for changes to be made.</div>
    </div>
</div>
<br><br><br><br>

<?php
}
    if (isset($_GET['delete'])) {
        $the_user_id = mysqli_real_escape_string($conn , $_GET['delete']);

        $query = "DELETE FROM images WHERE post_id = '$the_user_id'";

        $delete_query = mysqli_query($conn, $query) or die (mysqli_error($conn));
        if (mysqli_affected_rows($conn) > 0 ) {
            echo "<meta http-equiv='refresh' content='1;url=trial3.php' />";
        }
        else {
             echo "<meta http-equiv='refresh' content='1;url=trial3.php' />";
        }
    }
?>
<script src="js/jquery.js"></script>

</body>

</html>