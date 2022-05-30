<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;
class PostController extends Controller
{
    public function addPostView(){
        return view('/add-post');
    }
    public function addPost($id){
        $author = Author::find($id);
        $post = new Post;
        $post->title = 'Title 3';
        $post->cat = 'Cat 3';
        $author->post()->save($post);
        return 'Post inserted';

    }
//Get Post Based on Author ID
    public function showPost($id){
        $post = Author::find($id)->post;
        return $post;
    }

}
