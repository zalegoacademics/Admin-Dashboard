<?php
  //1.database connection
  require_once('logics/dbconnection.php');
  $sqlFetchEnrolledStudent = mysqli_query($conn,
        "SELECT * FROM enrollment WHERE no='".$_GET['id']."'  ");
  while($fetchStudent= mysqli_fetch_array($sqlFetchEnrolledStudent))
  {
    $fullname = $fetchStudent['fullname'];
    $email = $fetchStudent['email'];
    $phone = $fetchStudent['phonenumber'];
  }
?>

<!DOCTYPE html>
<html>
<?php  require_once('includes/headers.php') ?>
<body>
    <!-- All our code. write here   -->
    <?php  require_once('includes/navbar.php') ?>

	<div class="sidebar">
		<?php  require_once('includes/sidebar.php') ?>
	</div>
	<div class="maincontent pt-5">
    <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-dark text-white text-center">
                <h4 class="card-title">Personal information</h4>
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item">Full Name: <span class="float-end badge bg-primary"><?php echo $fullname ?></span></li>
                  <li class="list-group-item">Email: <span class="float-end badge bg-secondary">collins@zalego.com</span></li>
                  <li class="list-group-item">Phone Number: <span class="float-end badge bg-danger">+254790366848</span></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header bg-dark text-white text-center">
                <h4 class="card-title">Other information</h4>
              </div>
              <div class="card-body">
                <ul class="list-group">
                  <li class="list-group-item">Gender: <span class="float-end badge bg-primary"><?php echo $fullname ?></span></li>
                  <li class="list-group-item">Course: <span class="float-end badge bg-secondary">collins@zalego.com</span></li>
                  <li class="list-group-item">Enrolled On: <span class="float-end badge bg-danger">+254790366848</span></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
    </div>
	</div>


<?php require_once('includes/scripts.php') ?>
</body>
</html>