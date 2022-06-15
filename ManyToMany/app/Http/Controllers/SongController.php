<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Singer;
use App\Models\Song;

class SongController extends Controller
{
    public function addSong(){
        $song = new Song();
        $song->title = 'Gana five';
        $song->save();
        return 'Insert';
    }
    //Song Based on Singer ID 
    public function showSong($id){
        $song = Singer::find($id)->songs;
        return $song;
    }

}
