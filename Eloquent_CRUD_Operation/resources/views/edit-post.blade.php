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
       <div class="col-md-12 mt-5">
           <div class="card">
               <div class="card-header">
                   <h1>Edit Post <a href="/posts" class="btn btn-info"> All Posts</a></h1>
               </div>
               <div class="card-body">
                   @if(Session()->has('update-post'))
                   <div class="alert alert-success">
                       {{Session()->get('update-post')}}
                   </div>
                   @endif
                   <form action="{{route('update-post')}}" method="post">
                       @csrf
                       <input type="hidden" name="id" value="{{$post->id}}">
                       <div class="form-group mb-3 ">
                           <label for="title">Title</label>
                           <input type="text" name="title" value="{{$post->title}}" placeholder="Title" class="form-control">
                       </div>
                       <div class="form-group mb-3">
                           <label for="title">Body</label>
                          <textarea name="body" id="" cols="30" rows="10" class="form-control">{{$post->body}}</textarea>
                       </div>
                       <div class="form-group mb-3">
                          <button class="btn btn-primary">Update Post</button>
                       </div>
                   </form>
               </div>
           </div>
       </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
