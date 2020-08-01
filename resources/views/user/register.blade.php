@extends('layouts.app')
@section('title','Register')

@section('content')
    <div class="container">
        <div class="col-md-8 col-md-offset-2">
        <div class="well well component">
            
        <form method="post">
            @csrf
            <!-- <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="username" name="name" aria-describedby="emailHelp" placeholder="Enter email">
            </div> -->
            <legend>User Register</legend>
            @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
            @endforeach
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-primary pull-right">Next</button>
        </form>

        </div>
        </div>
    </div>
@endsection