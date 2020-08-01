@extends('layouts.master')

@section('title','Bill')

@section('content')
<div class="main-panel">
	<div class="content">
		<div class="page-inner">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<div class="d-flex align-items-center">
								<h4 class="card-title">User Bill</h4>
							</div>
						</div>
						<div class="card-body">
							<div class="table-responsive mt-3" style="border: 1px solid #e8e8e8;padding: 20px;">
								<table id="add-row" class="display table table-responsive">
									<thead>
										<tr>
											<th>Id</th>
											<th>User Name</th>
											<th>Bank Name</th>
											<th>Amount</th>
											<th>Transition Id</th>
											<th>Photo</th>
											<th class="text-center" style="width: 145px;">Status</th>	
										</tr>
									</thead>
									
									<tbody>
										@foreach($bills as $bill)
										<tr>
											<td>{{$bill->id}}</td>
											<td><a href="user_detail.html">{{$bill->client->name}}
											</a></td>
											<td>{{$bill->bank->name}}</td>
											<td>{{$bill->client->phone}}</td>
											<td>{{$bill->amount}}</td>
											<td>{{$bill->transaction}}</td>
											<td><img src="asset('/img/bill.jpg')" style="width: 100px;height: 100px;"></td>
											<td>
												<button type="submit" class="btn btn-success btn-sm">Confirm</button>
												<button type="submit" class="btn btn-danger btn-sm">Cancel</button>
											</td>
										</tr>
										@endforeach
						
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
