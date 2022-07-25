<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index(){
        return view('/home');
    }

    public function addPost(Request $request){
      $post = new Post;
      $post->title = $request->title;  
      $post->body = $request->body;
      $post->save();
      return back()->with('add-post','Post added Successfully !');
    }

    public function postView(){
        $posts = Post::paginate(1);
        return view('/post',compact('posts'));
    }
}
