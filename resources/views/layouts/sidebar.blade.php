
<!-- Sidebar -->
<div class="sidebar sidebar-style-2">
			
			<div class="sidebar-wrapper scrollbar scrollbar-inner">
				<div class="sidebar-content">
					<div class="">
						
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
							<img src="{{asset('/img/wlk.png')}}" alt="navbar brand" class="navbar-brand" width="100%;">
						</li>
						<li class="nav-item">
							<a href="{{url('/users')}}">
								<i class="fa fa-users"></i>
								<p>User</p>
								
							</a>
						</li>
						<li class="nav-item active">
							<a href="{{url('/admin/bill')}}">
								<i class="fa fa-dollar"></i>
								<p>Bill</p>
								
							</a>
						</li>
						<li class="nav-item">
							<a href="{{url('/admin/bank_receive')}}">
								<i class="fa fa-bank"></i>
								<p>Bank Receive</p>
								
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>