<?php

namespace App\Http\Controllers;
use App\Models\Author;
use App\Models\Post;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function addAuthor(){
        $author = new Author();
        $author->username = 'Mannan';
        $author->password = 'Sofik12';
        $author->save();
        return "Data Inserted";
    }
}
