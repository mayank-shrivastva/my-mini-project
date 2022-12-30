<?php 
 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
	<title>Admim Panel</title>
    
</head>
<body>
<?php include 'sidebar.php';?>
        <div class="content-body">
			<div class="container-fluid">
				<div class="row invoice-card-row">
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card bg-warning invoice-card">
							<div class="card-body d-flex">
								<div class="icon me-3">
									<svg  width="33px" height="32px">
									<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
									 d="M31.963,30.931 C31.818,31.160 31.609,31.342 31.363,31.455 C31.175,31.538 30.972,31.582 30.767,31.583 C30.429,31.583 30.102,31.463 29.845,31.243 L25.802,27.786 L21.758,31.243 C21.502,31.463 21.175,31.583 20.837,31.583 C20.498,31.583 20.172,31.463 19.915,31.243 L15.872,27.786 L11.829,31.243 C11.622,31.420 11.370,31.534 11.101,31.572 C10.832,31.609 10.558,31.569 10.311,31.455 C10.065,31.342 9.857,31.160 9.710,30.931 C9.565,30.703 9.488,30.437 9.488,30.167 L9.488,17.416 L2.395,17.416 C2.019,17.416 1.658,17.267 1.392,17.001 C1.126,16.736 0.976,16.375 0.976,16.000 L0.976,6.083 C0.976,4.580 1.574,3.139 2.639,2.076 C3.703,1.014 5.146,0.417 6.651,0.417 L26.511,0.417 C28.016,0.417 29.459,1.014 30.524,2.076 C31.588,3.139 32.186,4.580 32.186,6.083 L32.186,30.167 C32.186,30.437 32.109,30.703 31.963,30.931 ZM9.488,6.083 C9.488,5.332 9.189,4.611 8.657,4.080 C8.125,3.548 7.403,3.250 6.651,3.250 C5.898,3.250 5.177,3.548 4.645,4.080 C4.113,4.611 3.814,5.332 3.814,6.083 L3.814,14.583 L9.488,14.583 L9.488,6.083 ZM29.348,6.083 C29.348,5.332 29.050,4.611 28.517,4.080 C27.985,3.548 27.263,3.250 26.511,3.250 L11.559,3.250 C12.059,4.111 12.324,5.088 12.325,6.083 L12.325,27.092 L14.950,24.840 C15.207,24.620 15.534,24.500 15.872,24.500 C16.210,24.500 16.537,24.620 16.794,24.840 L20.837,28.296 L24.880,24.840 C25.137,24.620 25.463,24.500 25.802,24.500 C26.140,24.500 26.467,24.620 26.724,24.840 L29.348,27.092 L29.348,6.083 ZM25.092,20.250 L16.581,20.250 C16.205,20.250 15.844,20.101 15.578,19.835 C15.312,19.569 15.162,19.209 15.162,18.833 C15.162,18.457 15.312,18.097 15.578,17.831 C15.844,17.566 16.205,17.416 16.581,17.416 L25.092,17.416 C25.469,17.416 25.829,17.566 26.096,17.831 C26.362,18.097 26.511,18.457 26.511,18.833 C26.511,19.209 26.362,19.569 26.096,19.835 C25.829,20.101 25.469,20.250 25.092,20.250 ZM25.092,14.583 L16.581,14.583 C16.205,14.583 15.844,14.434 15.578,14.168 C15.312,13.903 15.162,13.542 15.162,13.167 C15.162,12.791 15.312,12.430 15.578,12.165 C15.844,11.899 16.205,11.750 16.581,11.750 L25.092,11.750 C25.469,11.750 25.829,11.899 26.096,12.165 C26.362,12.430 26.511,12.791 26.511,13.167 C26.511,13.542 26.362,13.903 26.096,14.168 C25.829,14.434 25.469,14.583 25.092,14.583 ZM25.092,8.916 L16.581,8.916 C16.205,8.916 15.844,8.767 15.578,8.501 C15.312,8.236 15.162,7.875 15.162,7.500 C15.162,7.124 15.312,6.764 15.578,6.498 C15.844,6.232 16.205,6.083 16.581,6.083 L25.092,6.083 C25.469,6.083 25.829,6.232 26.096,6.498 C26.362,6.764 26.511,7.124 26.511,7.500 C26.511,7.875 26.362,8.236 26.096,8.501 C25.829,8.767 25.469,8.916 25.092,8.916 Z"/>
									</svg>
									
								</div>
								<div>
									<h2 class="text-white invoice-num">0</h2>
									<span class="text-white fs-18">Profit</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card bg-success invoice-card">
							<div class="card-body d-flex">
								<div class="icon me-3">
									<svg width="35px" height="34px">
									<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
									 d="M32.482,9.730 C31.092,6.789 28.892,4.319 26.120,2.586 C22.265,0.183 17.698,-0.580 13.271,0.442 C8.843,1.458 5.074,4.140 2.668,7.990 C0.255,11.840 -0.509,16.394 0.514,20.822 C1.538,25.244 4.224,29.008 8.072,31.411 C10.785,33.104 13.896,34.000 17.080,34.000 L17.286,34.000 C20.456,33.960 23.541,33.044 26.213,31.358 C26.991,30.866 27.217,29.844 26.725,29.067 C26.234,28.291 25.210,28.065 24.432,28.556 C22.285,29.917 19.799,30.654 17.246,30.687 C14.627,30.720 12.067,29.997 9.834,28.609 C6.730,26.671 4.569,23.644 3.752,20.085 C2.934,16.527 3.546,12.863 5.486,9.763 C9.488,3.370 17.957,1.418 24.359,5.414 C26.592,6.808 28.360,8.793 29.477,11.157 C30.568,13.460 30.993,16.016 30.707,18.539 C30.607,19.448 31.259,20.271 32.177,20.371 C33.087,20.470 33.911,19.820 34.011,18.904 C34.363,15.764 33.832,12.591 32.482,9.730 L32.482,9.730 Z"/>
									<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
									 d="M22.593,11.237 L14.575,19.244 L11.604,16.277 C10.952,15.626 9.902,15.626 9.250,16.277 C8.599,16.927 8.599,17.976 9.250,18.627 L13.399,22.770 C13.725,23.095 14.150,23.254 14.575,23.254 C15.001,23.254 15.427,23.095 15.753,22.770 L24.940,13.588 C25.592,12.937 25.592,11.888 24.940,11.237 C24.289,10.593 23.238,10.593 22.593,11.237 L22.593,11.237 Z"/>
									</svg>
									
								</div>
								<div>
								<?php
								
								$query ="SELECT id FROM USER ORDER BY id";
								 $query_run = mysqli_query($conn, $query);
								 $row = mysqli_num_rows($query_run);
								 
								 echo '<h1 class="text-white invoice-num">' .$row.'</h1>';
								
								?>
									 
									<span class="text-white fs-18">user</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card bg-info invoice-card">
							<div class="card-body d-flex">
								<div class="icon me-3">
									<svg width="35px" height="34px">
									<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
									 d="M32.482,9.730 C31.092,6.789 28.892,4.319 26.120,2.586 C22.265,0.183 17.698,-0.580 13.271,0.442 C8.843,1.458 5.074,4.140 2.668,7.990 C0.255,11.840 -0.509,16.394 0.514,20.822 C1.538,25.244 4.224,29.008 8.072,31.411 C10.785,33.104 13.896,34.000 17.080,34.000 L17.286,34.000 C20.456,33.960 23.541,33.044 26.213,31.358 C26.991,30.866 27.217,29.844 26.725,29.067 C26.234,28.291 25.210,28.065 24.432,28.556 C22.285,29.917 19.799,30.654 17.246,30.687 C14.627,30.720 12.067,29.997 9.834,28.609 C6.730,26.671 4.569,23.644 3.752,20.085 C2.934,16.527 3.546,12.863 5.486,9.763 C9.488,3.370 17.957,1.418 24.359,5.414 C26.592,6.808 28.360,8.793 29.477,11.157 C30.568,13.460 30.993,16.016 30.707,18.539 C30.607,19.448 31.259,20.271 32.177,20.371 C33.087,20.470 33.911,19.820 34.011,18.904 C34.363,15.764 33.832,12.591 32.482,9.730 L32.482,9.730 Z"/>
									<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
									 d="M22.593,11.237 L14.575,19.244 L11.604,16.277 C10.952,15.626 9.902,15.626 9.250,16.277 C8.599,16.927 8.599,17.976 9.250,18.627 L13.399,22.770 C13.725,23.095 14.150,23.254 14.575,23.254 C15.001,23.254 15.427,23.095 15.753,22.770 L24.940,13.588 C25.592,12.937 25.592,11.888 24.940,11.237 C24.289,10.593 23.238,10.593 22.593,11.237 L22.593,11.237 Z"/>
									</svg>
									
								</div>
								<div>
									<h2 class="text-white invoice-num">0</h2>
									<span class="text-white fs-18">Income</span>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-3 col-xxl-3 col-sm-6">
						<div class="card bg-secondary invoice-card">
							<div class="card-body d-flex">
								<div class="icon me-3">
									<svg  width="33px" height="32px">
									<path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
									 d="M31.963,30.931 C31.818,31.160 31.609,31.342 31.363,31.455 C31.175,31.538 30.972,31.582 30.767,31.583 C30.429,31.583 30.102,31.463 29.845,31.243 L25.802,27.786 L21.758,31.243 C21.502,31.463 21.175,31.583 20.837,31.583 C20.498,31.583 20.172,31.463 19.915,31.243 L15.872,27.786 L11.829,31.243 C11.622,31.420 11.370,31.534 11.101,31.572 C10.832,31.609 10.558,31.569 10.311,31.455 C10.065,31.342 9.857,31.160 9.710,30.931 C9.565,30.703 9.488,30.437 9.488,30.167 L9.488,17.416 L2.395,17.416 C2.019,17.416 1.658,17.267 1.392,17.001 C1.126,16.736 0.976,16.375 0.976,16.000 L0.976,6.083 C0.976,4.580 1.574,3.139 2.639,2.076 C3.703,1.014 5.146,0.417 6.651,0.417 L26.511,0.417 C28.016,0.417 29.459,1.014 30.524,2.076 C31.588,3.139 32.186,4.580 32.186,6.083 L32.186,30.167 C32.186,30.437 32.109,30.703 31.963,30.931 ZM9.488,6.083 C9.488,5.332 9.189,4.611 8.657,4.080 C8.125,3.548 7.403,3.250 6.651,3.250 C5.898,3.250 5.177,3.548 4.645,4.080 C4.113,4.611 3.814,5.332 3.814,6.083 L3.814,14.583 L9.488,14.583 L9.488,6.083 ZM29.348,6.083 C29.348,5.332 29.050,4.611 28.517,4.080 C27.985,3.548 27.263,3.250 26.511,3.250 L11.559,3.250 C12.059,4.111 12.324,5.088 12.325,6.083 L12.325,27.092 L14.950,24.840 C15.207,24.620 15.534,24.500 15.872,24.500 C16.210,24.500 16.537,24.620 16.794,24.840 L20.837,28.296 L24.880,24.840 C25.137,24.620 25.463,24.500 25.802,24.500 C26.140,24.500 26.467,24.620 26.724,24.840 L29.348,27.092 L29.348,6.083 ZM25.092,20.250 L16.581,20.250 C16.205,20.250 15.844,20.101 15.578,19.835 C15.312,19.569 15.162,19.209 15.162,18.833 C15.162,18.457 15.312,18.097 15.578,17.831 C15.844,17.566 16.205,17.416 16.581,17.416 L25.092,17.416 C25.469,17.416 25.829,17.566 26.096,17.831 C26.362,18.097 26.511,18.457 26.511,18.833 C26.511,19.209 26.362,19.569 26.096,19.835 C25.829,20.101 25.469,20.250 25.092,20.250 ZM25.092,14.583 L16.581,14.583 C16.205,14.583 15.844,14.434 15.578,14.168 C15.312,13.903 15.162,13.542 15.162,13.167 C15.162,12.791 15.312,12.430 15.578,12.165 C15.844,11.899 16.205,11.750 16.581,11.750 L25.092,11.750 C25.469,11.750 25.829,11.899 26.096,12.165 C26.362,12.430 26.511,12.791 26.511,13.167 C26.511,13.542 26.362,13.903 26.096,14.168 C25.829,14.434 25.469,14.583 25.092,14.583 ZM25.092,8.916 L16.581,8.916 C16.205,8.916 15.844,8.767 15.578,8.501 C15.312,8.236 15.162,7.875 15.162,7.500 C15.162,7.124 15.312,6.764 15.578,6.498 C15.844,6.232 16.205,6.083 16.581,6.083 L25.092,6.083 C25.469,6.083 25.829,6.232 26.096,6.498 C26.362,6.764 26.511,7.124 26.511,7.500 C26.511,7.875 26.362,8.236 26.096,8.501 C25.829,8.767 25.469,8.916 25.092,8.916 Z"/>
									</svg>
								
								</div>
								<div>
								<?php
								
								$query ="SELECT AID FROM ADMIN ORDER BY AID";
								 $query_run = mysqli_query($conn, $query);
								 $row = mysqli_num_rows($query_run);
								 
								 echo '<h1 class="text-white invoice-num">' .$row.'</h1>';
								
								?>
									 
									<span class="text-white fs-18">Manager</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<?php  
									$sql="SELECT * FROM Admin  WHERE AID =$id";
									$result=mysqli_query($conn,$sql);
									$present=mysqli_num_rows($result);
									if($present>0)
									{

									while($row=mysqli_fetch_assoc($result))
									{
										?>
				<div class="row">
					<div class="col-xl-9 col-xxl-12">
						<div class="card">
							<div class="">
								<div class="row align-items-center">
									<div class="col-xl-6">
										<div class="card-bx bg-black">
											
											<img class="pattern-img" src="images/pattern/pattern6.png" alt="">
											<div class="card-info text-white">
												<img src="images/pattern/circle.png" class="mb-4" alt="">
												<h2 class="text-white card-balance"><?php echo $row['Name'];?></h2>
												<p class="fs-16"><?php echo $row['Email'];?></p>
											</div>
									   </div>
							      </div>
								  
									<div class="col-xl-6">
										<div class="row  mt-xl-0 mt-4">
											<div class="col-md-6">
												<h4 class="card-title">Card's Overview</h4>
												 <ul class="card-list mt-4">
													<li><span class="bg-blue circle"></span>Account<span>0</span></li>
													<li><span class="bg-success circle"></span>Services<span>0</span></li>
													
													<li><span class="bg-success circle"></span>Manager<span>0</span></li>
													 </ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					 <?php }} ?>
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
        </div>
						 	 
					<div class="col-xl-3 col-xxl-5">
						<div class="card">
							<div class="card-header border-0 pb-0">
								<div>
									<h4 class="card-title mb-2">Feedback</h4>
									 
								</div>
								 
							</div>
						</div>
					</div>
					<div class="col-xl-6 col-xxl-7">
						 
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
									 
									 
		</div>
				
		<?php include 'footer.php';?>
       
</body>

</html>
