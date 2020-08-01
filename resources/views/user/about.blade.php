@extends('layouts.app')
@section('title','Register')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
        <div class="well well component">
            
        <form method="post" action="{{url('/users/insert')}}">
            @csrf
            <!-- <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" name="name" aria-describedby="emailHelp" placeholder="Enter email">
            </div> -->
            <legend>Please Fill About Your Informations</legend>
            <input type="hidden" name="register_id" value="{{$register_id}}">
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Address">
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone">
            </div>
            <button type="submit" class="btn btn-primary pull-right">Register</button>
        </form>

        </div>
        </div>
    </div>
@endsection