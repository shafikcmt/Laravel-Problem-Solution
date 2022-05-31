<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if(session()->has('add-post'))
                <div class="alert alert-success">
                    {{session()->get('add-post')}}
                </div>
                @endif
                <div class="card">
                    <div class="card-header">
                        Add Post <a href="/" class="btn btn-info">Add Author</a>
                    </div>
                    <div class="card-body">
                    <form action="{{route('add-post')}}" method="POST">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="username">Post Title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group mb-3">
                        <label for="username">Post Category</label>
                        <input type="text" class="form-control" name="cat">
                    </div>
                    <div class="form-group mb-3">
                        <label for="username">Author Name</label>
                       <select class="form-control" name="author_id" id="">
                           @foreach($authors as $author)
                            <option value="{{$author->id}}">{{$author->username}}</option>
                            
                            @endforeach
                       </select>
                    </div>
                    <div class="form-group">
                        
                        <input type="submit" name="submit" value="Save">
                    </div>
                </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
