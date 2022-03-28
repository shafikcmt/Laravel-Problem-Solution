<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>Login Here</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{route('login-user')}}" method="post">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{Session::get('success')}}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{Session::get('fail')}}</div>
                            @endif
                            @csrf
                            <div class="mb-3 mt-3">
                                <label for="roll" class="form-label">Roll:</label>
                                <input type="number" value="{{old('roll')}}" class="form-control" id="roll" placeholder="Enter roll"
                                    name="roll">
                                    <span class="text-danger">@error('roll') {{$message}} @enderror</span>
                            </div>
                           
                            <div class="mb-3">
                                <label for="pwd" class="form-label">Password:</label>
                                <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                    name="password">
                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
                            </div>
                            
                            <button name="login" type="submit" class="btn btn-primary">Login</button>
                            <br>
                            <br>
                            <a href="/registration">New user registraion Here !!</a>
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
