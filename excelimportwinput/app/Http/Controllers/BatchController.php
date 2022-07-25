<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;
use App\Imports\BatchImport;

class BatchController extends Controller
{
    public function index(){
        return view('test');
    }
    public function import(Request $request){
        Excel::import(new BatchImport,$request->file('file'),$request->batch_id);
        return back()->with('import','Student data imported Successfully !');
    }
}
