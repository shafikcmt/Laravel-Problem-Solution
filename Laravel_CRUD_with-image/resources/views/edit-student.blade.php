<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Add Student</title>
  </head>
  <body>
    <section class="pt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="card">
                        <div class="card-header">
                           <h1>Update Student <a class="btn btn-info" href="/all-student">Students List</a></h1>
                        </div>
                        <div class="card-body">
                            @if(session()->has('update-student'))
                            <div class="alert alert-success">
                                {{session()->get('update-student')}}
                            </div>
                            @endif
                            
                            <form method="POST" enctype="multipart/form-data" action="{{route('update-student')}}">
                               @csrf 
                               <input type="hidden" name="id" value="{{$student->id}}">
                                <div class="form-group mb-3">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{$student->name}}" class="form-control" placeholder="Enter Name">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="name">Choose Profile Picture</label>
                                    <input type="file" name="file" class="form-control" onchange="previewFile(this)">
                                    <img id="previewImg" src="{{asset('images')}}/{{$student->profileimage}}" alt="Profile Picture" style="max-width:100px; margin-top:30px;">
                                </div>
                                <div class="form-group">
                                   
                                    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    <script>
        function previewFile(input){
            var file=$("input[type=file]").get(0).files[0];
            if(file){
                var reader = new FileReader();
                reader.onload = function(){
                    $('#previewImg').attr("src",reader.result);
                }
                reader.readAsDataURL(file);
            }
        }
    </script>
  </body>
</html>
