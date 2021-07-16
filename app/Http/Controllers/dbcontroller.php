<?php

namespace App\Http\Controllers;
use App\Blog;
use Illuminate\Support\Facades\Validator;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Http\Request;




class dbcontroller extends Controller
{
    public function getdata(){
        return view('data_table.index');
    }

    

public function indexpagetable(){

    $ajaxdata = Blog::all();

    return DataTables::of($ajaxdata)
    ->addColumn('action', function ($ajaxdata) {
    $buttons = '<a class="btn btn-info btn-sm" href="'.url('/ajax/'.$ajaxdata->id.'/').'">View</a>
    <a class="far fa-edit btn btn-sm btn-success btn-rounded m-b-1 m-l-5" href="'.url('/ajax/'.$ajaxdata->id.'/edit').'">Edit</a>
    <input type="hidden" id="hiddenID" value="'.$ajaxdata->id.'">
    <button data-token="'.csrf_token() .'" class="far fa-trash-alt btn btn-sm btn-danger btn-rounded m-b-1 m-l-5" id="delete">Delete</button>';
    return $buttons;
    })
    ->make(true);

    }


    public function destroy(Blog $ajaxdata)
    {
        $ajaxdata = Blog::where('id',$ajaxdata->id)->delete();
    }


// function remove(Request $request)
// {
// $Blog = Blog::where('id',$request->id)->delete();
// return response()->json(['status' => 'success' , 'message' => 'Deleted']);
// }

// function approve (Request $request){
//     $leave = DB::table ('leaves')::find ($request->id);
//     $leave->status = "Approved";
//     $leave->
// }









}