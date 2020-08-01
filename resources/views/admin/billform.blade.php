<form action="post" enctype="multipart/form-data">
    @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">User Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter User Name" name="name">
  </div>
  <div class="form-group">
    <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$client->id}}" placeholder="Enter User Name" name="client_id">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Photo</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="photo">
  </div>
  <div class="form-group">
      <label for="inputState">Bank</label>
      <select id="inputState" class="form-control" name="bankname">
          @foreach($banks as $bank)
        <option value="{{$bank->id}}">{{$bank->name}}</option>
        @endforeach
      </select>
    </div>
  <div class="form-group">
      <label for="inputState">Bank-Acc</label>
      <select id="inputState" class="form-control" name="bankacc">
          @foreach($bankaccs as $bankacc)
        <option value="{{$bankacc->id}}">{{$bankacc->acc_no}}</option>
        @endforeach
      </select>
    </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Amount</label>
    <input type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Amount" name="amount">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Receive Address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter" name="receive_address">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>