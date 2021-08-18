<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\task;

class taskController extends Controller
{
    function add(Request $request)
    {
        $title=$request->input('title');
        $status=$request->input('status');
        $date=$request->input('date');
        
        $task= new task();
        $task->title=$title;
        $task->status=$status;
        $task->date=$date; 

        $task->save();
        return $task;
  }

  function get(Request $request) {
      $records = task::all();
      return response()->json($records);
  } 
  function delete(Request $request) {
     $id = $request->input('id');
   // $record = task::find($id);
    $record = DB::delete("delete from tasks where id='$id'");
    $response = array('id'=>$id);
    return  $response;
  }

  function getone(Request $request) {
     $id = $request->input('id');
    
   // $record = task::find($id);
    $record = task::find($id);
    
    return  response()->json($record);
   //header("Access-Control-Allow-Origin",config('cors.allowed_origins'));
   
    //header("Access-Control-Allow-Methods",config('cors.allowed_methods'));
  }
}