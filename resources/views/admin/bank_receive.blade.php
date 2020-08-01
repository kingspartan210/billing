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
										<h4 class="card-title">Bank Receive</h4>
									</div>
								</div>
								<div class="card-body">
									<div class="table-responsive mt-3" style="border: 1px solid #e8e8e8;padding: 20px;">
										<table id="add-row" class="display table table-hove">
											<thead>
												<tr>
													<th>Id</th>
													<th>Transition Id</th>
													<th>Amount</th>
													<th>Receive Date</th>
													<th>Bank Account Id</th>
													<th>Bank Name</th>
												</tr>
											</thead>
											
											<tbody>
											@foreach ($bills as $bill)
												
												<tr>
													<td>{{$bill->id}}</td>
													<td>{{$bill->transaction}}</td>
													<td>{{$bill->amount}}</td>
													<td>{{$bill->created_at}}</td>
													<td>{{$bill->bank_account->acc_no}}</td>
													<td>{{$bill->bank->name}}</td>
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
