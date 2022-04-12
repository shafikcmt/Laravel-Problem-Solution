@extends('layouts.master')
@section('content')
@include('includes.sidebar')
<div class="main-content p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Student List</h4>
               
                <button class="btn btn-light">COPY</button>
                <button class="btn btn-light">PDF</button>
                <button class="btn btn-light">EXCELL</button>
                <button class="btn btn-light">CSV</button>
                <button class="btn btn-light">PRINT</button>
                <br> <br>
                <table class="table table-bordered table-hover table-striped">
                    @foreach($students as $stu)
                    <tr>
                        <td>{{$stu->roll}}</td>
                        <td>{{$stu->phone}}</td>
                        <td><a href="#" class="btn btn-primary">View</a></td>
                    </tr>
                    @endforeach
                </table>

            </div>
        </div>

        @stop
