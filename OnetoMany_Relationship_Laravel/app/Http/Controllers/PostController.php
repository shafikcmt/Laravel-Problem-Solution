<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;
class PostController extends Controller
{
    public function addPostView(){
        $authors = Author::all();
        return view('/add-post',compact('authors'));
    }
    public function addPost(Request $request){
        $author = Author::find($request->author_id);
        $post = new Post;
        $post->title = $request->title;
        $post->cat = $request->cat;
        $author->post()->save($post);
        return back()->with('add-post','Post added successfully !');

    }
//Get Post Based on Author ID
    public function showPost($id){
        $post = Author::find($id)->post;
        return $post;
    }

}
