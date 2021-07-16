<?php

namespace App\Http\Controllers;

use App\Blog;
//use Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
// use Yajra\DataTables\Facades\DataTables;



class BlogController extends Controller
{
    /**     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        //return $blogs;
        //return view ('folder_name.page_name');
        //return ('index');
        return view('blogs.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        $validator = Validator::make($request->all(),
        [
            'title' => 'required',
            'body' => 'required|unique:blogs,body',
            'fname'=>'rule',   
        ]
        );

        if($validator->fails()){
            return redirect('blogs/create')
                         ->withErrors($validator)
                         ->withInput();
        }
        Blog::create($request->all());

        return redirect()->route ('blogs.index')
                         ->with('success', 'Blog created successfully.');  
       
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //dd($blog); 
        return view('blogs.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        
        return view('blogs.edit',compact('blog'));
        

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // dd($request->body);


        $blog->update($request->all());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */

    public function destroy(Blog $blog)
    {

        $blog->delete();
        return redirect()->route('blogs.index');

    }

    

    // public function test(){
      
    //     $b = User::find(1)->passport()->get('country');

    //     // $b = Blog::find(2);

    //     return view ('test.test1',compact('b'));
    // }

    }

