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
                   <h1>Add Post <a href="/add-post" class="btn btn-info"> Add new Post</a></h1> 
               </div>
               <div class="card-body">
                  @if(Session()->has('delete-post'))
                  <div class="alert alert-success">
                      {{Session()->get('delete-post')}}
                  </div>
                  @endif
                   <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Post Title</th>
                                <th>Post Discription</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr>
                            
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                <td>
                                    <a href="/posts/{{$post->id}}" class="btn btn-info">Details</a>
                                    <a href="/posts-delete/{{$post->id}}" class="btn btn-info">Delete</a>
                                    <a href="/edit-post/{{$post->id}}" class="btn btn-info">Edit</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                   </table>
               </div>
           </div>
       </div>
   </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
