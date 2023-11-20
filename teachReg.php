<?php
session_start();
include('sidebar.php');
require 'header.php';
?>
<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

		<div class="container min-vh-100 col-sm-7">
			<?php include('message.php'); ?>
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<h4>Teacher Details
								<a href="teacherReg.php" class="btn btn-primary float-end">Add teacher</a>
							</h4>
						</div>
						<div class="card-body">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>ID</th>
										<th>Teacher Name</th>
										<th>IC Number</th>
										<th>Email</th>
										<th>User Type</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php 
										$query = "SELECT * FROM teacher";
										$query_run = mysqli_query($connect, $query);
										
										$i=1;
										if(mysqli_num_rows($query_run) > 0)
										{
											foreach($query_run as $teacher)
											{
												?>
												<tr>
													<td><?= $i; ?></td>
													<td><?= $teacher['teacherName']; ?></td>
													<td><?= $teacher['teacherUserName']; ?></td>
													<td><?= $teacher['teacherEmail']; ?></td>
													<td><?= $teacher['user_type']; ?></td>
													<td>
														<a href="teachview.php?id=<?=$teacher['Id']; ?>" class="btn btn-info btn-sm">View</a>
														<a href="teachedit.php?id=<?=$teacher['Id']; ?>" class="btn btn-success btn-sm">Edit</a>
														<form action="code1.php" method="POST" class="d-inline">
															<button type="submit" name="delete_teacher" value="<?=$teacher['Id'];?>" class="btn btn-danger btn-sm">Delete</button>
														</form>
													</td>
												</tr>
												<?php $i++;
											}
										}
										else
										{
											echo "<h5> No Record Found </h5>";
										}
									?>
						
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>


		<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="../assets/js/main.js"></script>
</body>
</html>