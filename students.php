<?php

require_once('logics/dbconnection.php');

$sql = mysqli_query($conn, "SELECT * FROM enrollment");

?>

<!DOCTYPE html>
<html>
	<?php require_once('includes/headers.php') ?>
<body>
	<!-- All our code. write here   -->
	<?php require_once('includes/navbar.php') ?>
	<div class="sidebar">
		<?php require_once('includes/sidebar.php') ?>
	</div>
	<div class="maincontent">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-12  pt-5">
					<div class="card">
						<div class="card-header bg-dark text-white text-center" >
							<span>Students</span>
						</div>
					</div>
					<div class="card-body">
						<table class="table table-striped table-hover table-responsive" style="font-size:12px;">
							<thead>
								<tr>
									<th>No.</th>
									<th>Full Name</th>
									<th>Phone Number</th>
									<th>Email</th>
									<th>Gender</th>
									<th>Course</th>
									<th>Enrolled on</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $count=1; while($fetch= mysqli_fetch_array($sql)) {?>
									<tr>
										<td><?php echo $count ?></td>
										<td><?php echo $fetch['fullname'] ?></td>
										<td><?php echo $fetch['phonenumber'] ?></td>
										<td><?php echo $fetch['email'] ?></td>
										<td><?php echo $fetch['gender'] ?></td>
										<td><?php echo $fetch['course'] ?></td>
										<td><?php echo $fetch['created_at'] ?></td>
										<td>
											<a href="edit-enrollment.php?id=<?php echo $fetch['no'] ?>" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i></a>
											<a href="view-enrollment.php?id=<?php echo $fetch['no'] ?>" class="btn btn-info btn-sm" ><i class="fa fa-eye"></i></a>
											<a href="delete-enrollment.php?id=<?php echo $fetch['no'] ?>" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
										</td>
									</tr>	
								<?php 
									$count++;
									}
								?>
							</tbody>
						</table>
					</div>
					<div class="card-footer"></div>
				</div>
			</div>
		</div>
	</div>

	<?php require_once('includes/scripts.php') ?>
</body>
</html>