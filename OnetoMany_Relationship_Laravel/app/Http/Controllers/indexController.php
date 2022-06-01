<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Post;
class indexController extends Controller
{
    // public function index($id){
    //     // $author = Author::find($id);
    //     // var_dump($author);
    //     // var_dump($author->username);
    //     // var_dump($author->password);
    //     // dd($author->post);
    //     // foreach($author->post as $post){
    //     //     // echo $post.'<br>';
    //     //     echo $post->title.'<br>';
    //     //     echo $post->cat.'<br>';
    //     // }
    //     // return view('index',compact('author'));
    // }

    public function index(){
        $author = Author::all();
        // var_dump($author);
        // var_dump($author->username);
        // var_dump($author->password);
        // dd($author->post);
        // foreach($author->post as $post){
        //     // echo $post.'<br>';
        //     echo $post->title.'<br>';
        //     echo $post->cat.'<br>';
        // }
        return view('/index',compact('author'));
    }
}
