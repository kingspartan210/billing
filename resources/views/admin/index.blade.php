@extends('layouts.master')

@section('title','User')

@section('content')

<div class="main-panel">
			<div class="content">
				<div class="page-inner">			
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">User</h4>
										
										
										
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive">
										<table class="table">
											<thead>
												<tr>
													<th>Id</th>
													<th>Name</th>
													<th>Phone</th>
													<th>Address</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<th scope="row">1</th>
													<td>Mr.John Smith</td>
													<td>09785643257</td>
													<td>Yangon</td>
													<th><a href="{{url('user_detail')}}"><button type="submit" class="btn btn-primary btn-sm">Detail</button></a></th>
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
		@endsection