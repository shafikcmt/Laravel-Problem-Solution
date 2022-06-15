<?php

namespace App\Http\Controllers;
use App\Models\Singer;
use App\Models\Song;
use Illuminate\Http\Request;

class SingerController extends Controller
{
   public function addSinger(){
    $singers = new Singer();
    $singers->name = 'Sabuz';
    $singers->save();
   
    $songsids = [1,2,3];
    $singers->songs()->attach($songsids);

   }

   //Get Singer Based on Song id 

   public function showSinger($id){
    $singer = Song::find($id)->singers;
    return $singer;

   }
}
