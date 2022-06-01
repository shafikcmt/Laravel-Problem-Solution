<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addAuthorView(){
        return view('/add-author');
    }
    public function addAuthor(Request $request){
        $author = new Author();
        $author->username = $request->username;
        $author->password = $request->password;
        $author->save();
        return back()->with('author','Author inserted Successfully !');
    }
    // public function addAuthor(){
    //     $author = new Author();
    //     $author->username = 'Mannan';
    //     $author->password = 'Sofik12';
    //     $author->save();
    //     return "Data Inserted";
    // }

    //Get Author Based on Post ID

    public function showAuthor($id){
        $author = Post::find($id)->author;
        return $author;
    }
}
