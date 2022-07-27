<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class dropdownController extends Controller
{
       /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function view()
    {
        $categories = \DB::table('categories')
            ->get();
        
        return view('dropdown', compact('categories'));
    }

    /**
     * return states list.
     *
     * @return json
     */
    public function getCourse(Request $request)
    {
        $course = \DB::table('courses')
            ->where('category_id', $request->id)
            ->get();
        
        if (count($course) > 0) {
            return response()->json($course);
        }
    }

    
    
}