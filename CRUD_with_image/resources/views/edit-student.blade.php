<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Update Student <a class="btn btn-primary" href="/all-student">Back</a></h2>
                    </div>
                    <div class="card-body">
                        @if(session()->has('update-student'))
                        <div class="alert alert-success">
                            {{session()->get('update-student')}}
                        </div>
                        @endif
                        <form method="POST" action="{{route('update-student')}}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="{{$students->id}}">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" value="{{$students->name}}">
                                <div class="text-danger">@error('name') {{$message}} @enderror</div>
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" name="email" class="form-control" value="{{$students->email}}">
                                <div class="text-danger">@error('email') {{$message}} @enderror</div>
                            </div>
                            <div class="form-group">
                                <label for="name">Phone</label>
                                <input type="text" name="phone" class="form-control" value="{{$students->phone}}">
                                <div class="text-danger">@error('phone') {{$message}} @enderror</div>

                            </div>
                            <div class="form-group">
                                <label for="name">Photo</label>
                                <input type="file" name="image" class="form-control">
                                <div class="text-danger">@error('image') {{$message}} @enderror</div>

                                <img class="mt-2" src="{{asset('images')}}/{{$students->photo}}" width="100px" alt="">
                            </div>
                            <div class="form-group mt-2">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>