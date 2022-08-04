<?php
    $message='';
    require_once('logics/dbconnection.php');
    $queryStudent = mysqli_query($conn, 
    "SELECT * FROM enrollment WHERE no='".$_GET['id']."'   ");
    while($fetchStudent = mysqli_fetch_array($queryStudent))
    {
        $id = $fetchStudent['no'];
        $fullname = $fetchStudent['fullname'];
        $gender = $fetchStudent['gender'];
        $email = $fetchStudent['email'];
        $course = $fetchStudent['course'];
        $phone = $fetchStudent['phonenumber'];
    }

    // updating user records
    require_once('logics/process-update.php');
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
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-dark text-white text-center">
                            <span class="float-start"><a href="students.php" class="btn btn-outline-secondary btn-sm"><i class="fa fa-arrow-left"></i> Back</a></span>
                            <h4>Edit student  </h4>
                            <?php  echo $message ?>
                        </div>
                        <div class="card-body">
                            <form action="edit-enrollment.php?id=<?php echo $id ?>" method="POST" >
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="fullname" class="form-label">Full Name:</label>
                                        <input type="text" name="fullname" value="<?php echo $fullname  ?>" required class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="phonenumber" class="form-label">Phone Number:</label>
                                        <input type="phonenumber" name="phonenumber" required maxlength="13" minlength="10" value="<?php echo $phone ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label for="email" class="form-label">Email:</label>
                                        <input type="email" name="email" value="<?php echo $email ?>" required class="form-control">
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="gender" class="form-label">Gender:</label>
                                        <select name="gender" class="form-control" required>
                                            <option><?php echo $gender ?></option>
                                            <option value="Male">Male</option>
                                            <option value="Female">Female</option>
                                        </select>
                                    </div>
                                    <div class="col-lg-6">
                                        <label for="course" class="form-label">Course:</label>
                                        <select name="course" class="form-control" required>
                                            <option><?php echo $course ?></option>
                                            <option value="Web Design & Development">Web Design & Development</option>
                                            <option value="Cyber Security">Cyber Security</option>
                                            <option value="Data Analysis">Data Analysis</option>
                                            <option value="AWS Cloud Certifications">AWS Cloud Certifications</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row pt-3">
                                    <div class="col-lg-6">
                                        <button type="submit" name="updateEnrollment" class="btn btn-outline-dark">Update records</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>


<?php require_once('includes/scripts.php') ?>
</body>
</html>