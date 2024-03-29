<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    function index()
    {
      $data = DB::table('students')
      ->orderBy('id', 'desc')
      ->paginate(10);
     return view('live_search',compact('data'));
    }

    function action(Request $request)
    {
     if($request->ajax())
     {

      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('students')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('roll', 'like', '%'.$query.'%')
         ->orWhere('class', 'like', '%'.$query.'%')
         ->orWhere('branch', 'like', '%'.$query.'%')
         ->orWhere('semester', 'like', '%'.$query.'%')
         ->orWhere('mobile', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orderBy('id', 'desc')
         ->get();
         
      }
      else
      {
      
        $data = DB::table('students')
        ->orderBy('id', 'desc')
        ->paginate(10);
        //  return view('live_search',compact('data'))->render();
      
      

      }
      $total_row = $data->count();
      if($total_row > 0)
      {
        
       foreach($data as $key => $row)
       {
        $kew=1;
        $output .= '
        <tr>
         <td>'.$key+$data->firstItem().'</td>
         <td>'.$row->name.'</td>
         <td>'.$row->roll.'</td>
         <td>'.$row->class.'</td>
         <td>'.$row->branch.'</td>
         <td>'.$row->semester.'</td>
         <td>'.$row->mobile.'</td>
         <td>'.$row->email.'</td>
         <td>
         <a class="btn btn-primary" href="'.$row->id.'">Edit</a>
         <a class="btn btn-primary" href="edit/'.$row->id.'">Delete</a>
         </td>
        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="7">No Data Found</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);

     }
    }
    public function edit(){
      return view('edit');
    }
}



