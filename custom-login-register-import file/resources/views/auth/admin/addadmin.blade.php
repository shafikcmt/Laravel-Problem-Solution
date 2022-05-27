@extends('layouts.adminmaster')
@section('content')
    <div id="contentpart">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 mt-3 shadow p-4 mb-4 bg-white rounded h-100 ">
                    <div class="card card-main">
                        <div class="card-header">
                            <h3 class="text-center pt-3 pb-3 text-uppercase">Add Admin</h3>
                        </div>
                        <div class="card-body">
                        <form action="{{route('add-admin')}}" method="POST">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control shadow" value="{{old('username')}}" id="username" placeholder="Enter username" name="username">
                                    <label class="text-uppercase" for="username">Username</label>
                                    <span class="text-danger">@error('username') {{$message}} @enderror</span>
                                </div>
                              
                                <div class="form-floating  mt-3">
                                    <input type="password" class="form-control shadow" id="phone" placeholder="Enter password" name="password">
                                    <label class="text-uppercase" for="password">Password</label>
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>
                               
                                <div class="form-bottom  align-bottom">
                                    <button name="register" type="submit" class="btn btn-primary mt-3">Register</button><br>
                                    <span>Alredy registered, <a href="/login">Login now</a></span>
                                   
                                </div>



                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop