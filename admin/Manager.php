 <?php 


?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 
	<title>Admim Panel</title>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
 
</head>
<body>
  <?php include 'sidebar.php';?>
         
       	<div class="content-body">
	<div class="container-fluid">
		 
		<!-- row -->
		<div class="col-xl-6 col-lg-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Add manager</h4>
					</div>
					<div class="card-body">
						<div class="basic-form">
						 
									 
							<form class="form" action="backend.php" method="post">

								<div class="row">
									<div class="mb-3 col-md-6">
										<label class="form-label"> User Name</label>
										<input type="text" class="form-control" name="name" placeholder="user name">
									</div>
									<div class="mb-3 col-md-6">
										<label class="form-label">Email</label>
										<input type="email" class="form-control"name="email" placeholder="Email">
									</div>
									<div class="mb-3 col-md-6">
										<label class="form-label">Password</label>
										<input type="password" class="form-control" name="password" placeholder="Password">
									</div>
									 
								</div>
								 
								<button type="submit" class="btn btn-primary" name="add_manager">Add Manager</button>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="card">
					<div class="card-body">
						<div class="profile-tab">
							<div class="custom-tab-1">
								 <center><h3> Manager details</h3></center><br><br>
							 
					 
						<div class="table-responsive">
							<table class="table table-responsive-md">
								<thead>
									<tr>
										  
										 
										<th><strong>Id</strong></th>
										 <th><strong> Name </strong></th>
										<th><strong>Operation</strong></th>
										<th></th>
									</tr>
								</thead>
								<tbody>
									<?php  
									$sql="SELECT * FROM admin ";
									$result=mysqli_query($conn,$sql);
									$present=mysqli_num_rows($result);
									if($present>0)
									{

									while($row=mysqli_fetch_assoc($result))
									{
										?>
									<tr>
										 
										<td><strong><?php echo $row['AID'];?></strong></td>
										<td> <?php echo $row['Name'];?></td>
										 
										
										 	<td>
											<div class="d-flex">
												<a href="#" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-ban" aria-hidden="true"></i></a>
											 
											 
											</div>
										</td>
									</tr><?php }} ?>
									
									 
								</tbody>
							</table>
						</div>
					
					
							 
				</div>
            </div> 
		</div>
	</div> 
			</div>
  <?php include 'footer.php'; ?>
	
</body>

</html>
