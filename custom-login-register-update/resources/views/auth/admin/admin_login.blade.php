@extends('layouts.adminmaster')
@section('content')
    <div id="contentpart">
        <div class="container">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="col-md-4 mt-3 shadow p-4 mb-4 bg-white rounded h-100 ">
                    <div class="card card-main">
                        <div class="card-header">
                            <h3 class="text-center pt-3 pb-3 text-uppercase">Admin Login</h3>
                        </div>
                        <div class="card-body">
                            <form action="{{route('login-admin')}}" method="POST">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                                <div class="form-floating mb-3 mt-3">
                                    <input type="text" class="form-control shadow" id="roll" value="{{old('roll')}}" placeholder="Enter roll" name="username">
                                    <label class="text-uppercase" for="roll">Username</label>
                                    <span class="text-danger">@error('username') {{$message}} @enderror</span>
                                </div>
                                <div class="form-floating mb-3 mt-3">
                                    <input type="password" class="form-control shadow" id="pwd" placeholder="Enter password" name="password">
                                    <label class="text-uppercase" for="password">Password</label>
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                                </div>
                                <div class="form-bottom mt-5">
                                    <button  name="login" type="submit" class="btn btn-primary mt-3">Login</button>
                                    <span style="color:red;">Forgot password</span>

                                </div>



                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
@stop