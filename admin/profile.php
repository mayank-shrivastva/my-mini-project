 <?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- PAGE TITLE HERE -->
	<title>Admim Panel</title>
    <link href="../css/style.css" rel="stylesheet">
</head>
<body>
<?php include('sidebar.php');?>
<?php  
									$sql="SELECT * FROM Admin  WHERE AID =$id";
									$result=mysqli_query($conn,$sql);
									$present=mysqli_num_rows($result);
									if($present>0)
									{

									while($row=mysqli_fetch_assoc($result))
									{
										?>

        <div class="content-body">
            
			<div class="container-fluid">
				 
				 
			 
				<div class="row">
					<div class="col-xl-12">
						<div class="card profile-card">
							<div class="card-header flex-wrap border-0 pb-0">
								<h3 class="fs-24 text-black font-w600 me-auto mb-2 pe-3">Edit Profile</h3>
								<div class="d-sm-flex d-block">
									<div class="d-flex me-5 align-items-center">
										 
									</div>
									<a href="#" class="btn btn-dark light btn-rounded me-3 mb-2">Cancel</a>
									<a class="btn btn-primary btn-rounded mb-2" href="#">Save Changes</a>
								</div>
								
							</div>
							<img src= "images/ion/man%20(1).png" alt="Avatar" style="width:200px">

							<div class="card-body">
								<form>
									<div class="mb-5">
										<div class="title mb-4"><span class="fs-18 text-black font-w600">Generals</span></div>
										<div class="row">
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>User Name</label>
													<input type="text" class="form-control" value="<?php echo $row['Name'];?>">
												</div>
											</div>
											 
											 
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Email</label>
													<input type="text" class="form-control" value="<?php echo $row['Email'];?>">
												</div>
											</div>
											<div class="col-xl-4 col-sm-6">
												<div class="form-group">
													<label>Password</label>
													<input type="password" class="form-control" value="<?php echo $row['Password'];?>">
												</div>
											</div>
											 
										</div>
									</div>
								 
											 
										</div>
									</div>
									 
								</form>
							</div>
						</div>
						</div>
						</div>
						 <?php }} ?>
			 
       <?php include 'footer.php';?>
	
</body>

</html>
