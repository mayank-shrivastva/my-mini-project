 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admim Panel</title>
    <link href="../css/style.css" rel="stylesheet">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<?php include('sidebar.php');?>
        <div class="content-body">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xl-6 col-xxl-12">
						<div class="card">
							<div class="card-header d-block d-sm-flex border-0">
								<div class="me-3">
									<h4 class="card-title mb-2">User Detail</h4>
								</div>
								 
							</div>
							<div class="card-body tab-content p-0">
								<div class="tab-pane active show fade" id="monthly" role="tabpanel">
									<div class="table-responsive">
										 <table class="table table-responsive-md card-table transactions-table">
											<tbody>
												<tr> 
													<td>
														<h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black">ID</a></h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0">User Name</h6>
														 
													</td><td>
														<h6 class="fs-16 text-black font-w600 mb-0">Email</h6>
														 
													</td>
													<td><span class="fs-16 text-black font-w600">Operation</span></td>
													 
												</tr>
												<?php  
									$sql="SELECT * FROM user ";
									$result=mysqli_query($conn,$sql);
									$present=mysqli_num_rows($result);
									if($present>0)
									{

									while($row=mysqli_fetch_assoc($result))
									{
										?>
												<tr>
													 
													<td>
														<h6 class="fs-16 font-w600 mb-0"><a href="javascript:void(0);" class="text-black"><?php echo $row['ID'];?></a></h6>
														 
													</td>
													<td>
														<h6 class="fs-16 text-black font-w600 mb-0"><?php echo $row['Name'];?><h6>
														 
													</td>
													<td><span class="fs-16 text-black font-w600"><?php echo $row['Email'];?></span></td>
													<td>
												<a href="#"  class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-ban" aria-hidden="true"></i></a>
												 
												 <?php }} ?>
											</tbody>
										</table>
					</div>
				</div>
            </div>
        </div>
       
       <?php include 'footer.php';?>
</body>

</html>
