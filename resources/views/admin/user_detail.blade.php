<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>WLK Foundation</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	
	
	<link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon.png">


	<!-- Fonts and icons -->
	<script src="assets/js/plugin/webfont/webfont.min.js"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/atlantis.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<!-- Logo Header -->
			<div class="logo-header">
				
				<a href="index.html" class="logo">
				
				<h2 class="logo-mt mt-3" style="color: #ffffff;">WLK Foundation</h2>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="icon-menu"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
				<div class="nav-toggle">
					<button class="btn btn-toggle toggle-sidebar">
						<i class="icon-menu"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">
				
				<div class="container-fluid">
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="fa fa-bell"></i>

							</a>
							<ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-scroll scrollbar-outer">
										<div class="notif-center">
											<a href="#">
												<div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
												<div class="notif-content">
													<span class="block">
														New user registered
													</span>
													<span class="time">5 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
												<div class="notif-content">
													<span class="block">
														Rahmad commented on Admin
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-img"> 
													<img src="assets/img/profile2.jpg" alt="Img Profile">
												</div>
												<div class="notif-content">
													<span class="block">
														Reza send messages to you
													</span>
													<span class="time">12 minutes ago</span> 
												</div>
											</a>
											<a href="#">
												<div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
												<div class="notif-content">
													<span class="block">
														Farrah liked Admin
													</span>
													<span class="time">17 minutes ago</span> 
												</div>
											</a>
										</div>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						
						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">

								</div>



								
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<div class="dropdown-user-scroll scrollbar-outer">
									<li>
										<div class="user-box">
											<div class="avatar-lg"><img src="assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
											<div class="u-text mt-3">
												<h4>Mr.John Smith</h4>
												
											</div>
										</div>
									</li>
									<li>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="profile.html">My Profile</a>
										<a class="dropdown-item" href="change_password.html">Change Password</a>
										<div class="dropdown-divider"></div>
										<a class="dropdown-item" href="#">Logout</a>
									</li>
								</div>
							</ul>
						</li>
						
					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>

		<!-- Sidebar -->
		<div class="sidebar sidebar-style-2">
			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						
						<div class="info">
							<div class="collapse in" id="collapseExample">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav nav-primary">
						<li class="nav-item">
							<img src="assets/img/wlk.png" alt="navbar brand" class="navbar-brand" width="100%;">
						</li>
						<li class="nav-item">
							<a href="index.html">
								<i class="fa fa-users"></i>
								<p>User</p>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="bill.html">
								<i class="fa fa-dollar"></i>
								<p>Bill</p>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="bank_receive.html">
								<i class="fa fa-bank"></i>
								<p>Bank Receive</p>
								
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">User Detail</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="row">
										<div class="col-md-4">
											<div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label">Name : </label>
												<div class="col-md-9 p-0">
													<span>Mr.John Smith</span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label">Phone : </label>
												<div class="col-md-9 p-0">
													<span>09878643567</span>
												</div>
											</div>
										</div>
										<div class="col-md-4">
											<div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label">Address : </label>
												<div class="col-md-9 p-0">
													<span>Yangon</span>
												</div>
											</div>
										</div>
									</div>
									<div class="table-responsive mt-3" style="border: 1px solid #e8e8e8;padding: 20px;">
										<table id="add-row" class="display table table-hove">
											<thead>
												<tr>
													<th>Id</th>
													<th>User Id</th>
													<th>Bank Name</th>
													<th>Bank Account Id</th>
													<th>Amount</th>
													<th>Transition Id</th>
													<th>Photo</th>
													<th class="text-center">Status</th>	
												</tr>
											</thead>
											
											<tbody>
												<tr>
													<td>1</td>
													<td>1101</td>
													<td>John Smith</td>
													<td>3101</td>
													<td>100,000</td>
													
													<td>021</td>
													<td><img src="assets/img/bill.jpg" style="width: 100px;height: 120px;"></td>
													<td>
														<button type="submit" class="btn btn-success btn-sm">Confirm</button>
														<button type="submit" class="btn btn-danger btn-sm">Cancel</button>
													</td>
												</tr>
												<tr>
													<td>2</td>
													<td>1101</td>
													<td>John Smith</td>
													<td>3101</td>
													<td>100,000</td>
													<td>7</td>
													<td><img src="assets/img/bill.jpg" style="width: 100px;height: 120px;"></td>
													<td>
														<button type="submit" class="btn btn-success btn-sm">Confirm</button>
														<button type="submit" class="btn btn-danger btn-sm">Cancel</button>
													</td>
												</tr>
												<tr>
													<td>3</td>
													<td>1101</td>
													<td>John Smith</td>
													<td>3101</td>
													<td>100,000</td>
													<td>7</td>
													<td><img src="assets/img/bill.jpg" style="width: 100px;height: 120px;"></td>
													<td>
														<button type="submit" class="btn btn-success btn-sm">Confirm</button>
														<button type="submit" class="btn btn-danger btn-sm">Cancel</button>
													</td>
												</tr>
												<tr>
													<td>4</td>
													<td>1101</td>
													<td>John Smith</td>
													<td>3101</td>
													<td>100,000</td>
													<td>7</td>
													<td><img src="assets/img/bill.jpg" style="width: 100px;height: 120px;"></td>
													<td>
														<button type="submit" class="btn btn-success btn-sm">Confirm</button>
														<button type="submit" class="btn btn-danger btn-sm">Cancel</button>
													</td>
												</tr>
												<tr>
													<td>5</td>
													<td>1101</td>
													<td>John Smith</td>
													<td>3101</td>
													<td>100,000</td>
													<td>7</td>
													<td><img src="assets/img/bill.jpg" style="width: 100px;height: 120px;"></td>
													<td>
														<button type="submit" class="btn btn-success btn-sm">Confirm</button>
														<button type="submit" class="btn btn-danger btn-sm">Cancel</button>
													</td>
												</tr>
								
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		
		
	</div>
	<!--   Core JS Files   -->
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<!-- jQuery UI -->
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
	
	<!-- jQuery Scrollbar -->
	<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
	<!-- Datatables -->
	<script src="assets/js/plugin/datatables/datatables.min.js"></script>
	<!-- Atlantis JS -->
	<script src="assets/js/atlantis.min.js"></script>
	
	<script>
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 10,
			});

			
		});
	</script>
</body>
</html>