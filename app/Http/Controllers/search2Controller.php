<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use Illuminate\Support\Facades\DB;

class search2Controller extends Controller
{
    public function index(){
        return view('search2.index');
    }
    public function autocomplete(Request $request){
        $data = [];

        if($request->has('q')){
            $search = $request->q;

            $data = Supplier::select("id","f_name")
                    ->where('f_name','LIKE',"%$search%")
                    ->get();      
          //  $data =DB::table('suppliers')->select('id','f_name')->where('f_name','LIKE',"%$search%")->get();
          //  $data =DB::table('suppliers')->select('*')->get();

        }
        return response()->json($data);
    }


Public function index_2(){
    return view('search2.autocomplete');
}

public function fetchdata(Request $request)



    {

        if($request->get('query'))

        {

         $query = $request->get('query');

         $data = DB::table('suppliers')

           ->where('f_name', 'LIKE', "%{$query}%")

           ->get();

         $output = '<ul class="dropdown-menu" style="display:block; position:relative">';

         foreach($data as $row)

         {

          $output .= '

          <li>'.$row->f_name.'</li>

          ';

         }

         $output .= '</ul>';

         echo $output;

        }

    }
}