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
                           <h1>Students List <a class="btn btn-info" href="/">Back</a></h1>
                        </div>
                        <div class="card-body">
                        @if(session()->has('student_deleted'))
                            <div class="alert alert-success">
                                {{session()->get('student_deleted')}}
                            </div>
                            @endif
                           <table class="table table-striped">
                               <thead>
                                   <tr>
                                       <th>Name</th>
                                       <th>Profile Picture</th>
                                       <th>Action</th>
                                   </tr>
                                
                               </thead>
                               @foreach($students as $student)
                               <tr>

                                   <td>{{$student->name}}</td>
                                   <td><img src="{{asset('images')}}/{{$student->profileimage}}" alt="" style="max-width:60px;"></td>
                                   <td>
                                       <a href="/edit-student/{{$student->id}}" class="btn btn-info">Edit</a>
                                       
                                       <a href="/delete-student/{{$student->id}}" class="btn btn-info">Delete</a>
                                   </td>
                               </tr>
                               @endforeach
                           </table>
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
    
  </body>
</html>
