<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Registration</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Registration</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('register-user')}}" method="POST">
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="roll" class="form-label">Roll:</label>
                                <input type="text" class="form-control" id="roll" value="{{old('roll')}}" placeholder="Enter roll"
                                    name="roll">
                                    <span class="text-danger">@error('roll') {{$message}} @enderror</span>
                            </div>
                            <div class="mb-3 mt-3">
                                <label for="phone" class="form-label">Phone:</label>
                                <input type="text" value="{{old('phone')}}" class="form-control" id="roll" placeholder="Enter phone"
                                    name="phone">
                                    <span class="text-danger">@error('phone') {{$message}} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                    name="pswd">
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                            
                            <button type="submit" name="register" class="btn btn-primary">Register</button>
                            <br>
                            <br>
                            <a href="/login">Already register Login Here !!</a>
                        </form>
                    </div>
                    <div class="card-footer">
                        <h3>Geeta Technical HUB</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>

</body>

</html>
