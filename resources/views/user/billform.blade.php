@extends('layouts.app')
@section('title','Register')

@section('content')
    <div class="container">
        <div class="col-md-6 col-md-offset-2">
        <div class="well well component">
            
        <form method="post" action="{{url('/users/bills/insert')}}" enctype="multipart/form-data">
            @csrf
            <!-- <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" name="name" aria-describedby="emailHelp" placeholder="Enter email">
            </div> -->
            <legend>Fill up your bill form</legend>
            <input type="hidden" name="client_id" value="{{$client_id}}">
            
            <div class="form-group">
                <label for="exampleFormControlFile1">Upload your bank slip</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
            </div>


            
            <div class="form-group col-md-4">
                <label for="inputState">Bank</label>
                <select id="inputState" class="form-control" name="bank_id">
                @foreach($banks as $bank)
                    <option value="{{$bank->id}}">{{$bank->name}}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group col-md-4">
                <label for="inputState">Bank Acc</label>
                <select id="inputState" class="form-control" name="bank_account_id">
                @foreach($bank_accounts as $bank_account)
                    <option value="{{$bank_account->id}}">{{$bank_account->acc_no}}</option>
                @endforeach
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="inputEmail4">Amount</label>
                <input type="number" class="form-control" id="inputEmail4" placeholder="Amount" name="amount">
            </div>

            <div class="form-group">
                <label for="inputAddress">Receive Address</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="receive_address">
            </div>
            
            <div class="form-group">
                <label for="inputAddress">Transaction</label>
                <input type="number" class="form-control" id="inputAddress" name="transaction" placeholder="Transaction">
            </div>

            <div class="form-group">
                <label for="inputAddress">Status</label>
                <input type="text" class="form-control" id="inputAddress" placeholder="Status" name="status">
            </div>
            <button type="submit" class="btn btn-primary pull-right">Ok</button>
        </form>

        </div>
        </div>
    </div>
@endsection