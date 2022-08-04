<?php 
require_once('logics/dbconnection.php');
// counting total number of students
$queryEnrolledStudents = mysqli_query($conn, "SELECT * FROM enrollment");
$countAllStudents = mysqli_num_rows($queryEnrolledStudents);

//count by gender
$queryEnrolledFemale = mysqli_query($conn,"SELECT * FROM enrollment WHERE gender='Female' ");
$countAllFemale = mysqli_num_rows($queryEnrolledFemale);
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
							<span>Students</span>
						</div>
					</div>
					<div class="card-body">
						<span><i class="fa fa-group fa-3x"></i></span>
						<span class="float-end badge bg-dark rounded-pill"><?php echo $countAllStudents?></span>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>Available Courses</span>
						</div>
						<div class="card-body">
							<span><i class="fa fa-folder-open fa-3x"></i></span>
							<span class="float-end"><?php echo $countAllFemale ?></span>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>Campuses</span>
						</div>
						<div class="card-body">
							<span><i class="fa fa-graduation-cap fa-3x"></i></span>
							<span class="float-end">00</span>
						</div>
						<div class="card-footer"></div>
					</div>
				</div>
				<div class="col-lg-3">
					<a href="students.php" class="text-decoration-none">
						<div class="card">
							<div class="card-header bg-dark text-white text-center">
								<span>Users</span>
							</div>
							<div class="card-body">
								<span><i class="fa fa-group fa-3x"></i></span>
								<span class="float-end"><?php echo $countStudents?></span>
							</div>
							<div class="card-footer"></div>
						</div>
					</a>
				</div>
				<div class="col-lg-3">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>Top content</span>
						</div>
						<div class="card-body"></div>
						<div class="card-footer"></div>
					</div>
				</div>
			</div>
			<div class="row pt-3">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header bg-dark text-white text-center">
							<span>student analysis</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<?php require_once('includes/scripts.php') ?>
</body>
</html>