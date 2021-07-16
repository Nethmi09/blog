@extends('layout.layout')
@section('content')

<div class ="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Show all blogs</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-success" href="{{ route('blogs.create')}}"> Create new blogs </a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
<div class= "alert alert-success">
    <p>{{$message}}</p>
</div>
@endif


<div class="card">
    <div class="card-header">
        <h3> <span><i class="fas fa-address-card"></i></span> This is the card </h3>  
    </div>
    <div class="card-body">
        <table class="table table-bordered">
     <tr>
         <th></th>
         <th>Title</th>
         <th>Description</th>
         <th width="250px">Action</th>
     </tr>

     @foreach ($blogs as $blog)

    
                  
     <tr>
         <td>❤</td>
         <td>{{ $blog->title}}</td>
         <td>{{ $blog->body}}</td>
         <td> 
            <form action= "{{route('blogs.destroy' , $blog->id)}}"  method="POST"> 
                <a class="btn btn-info" href="{{ route('blogs.show' ,$blog->id)}}"> Show </a>
                <a class="btn btn-primary" href="{{ route('blogs.edit' ,$blog->id)}}"> Edit </a>
            {{-- <a href = "" class="btn btn-info" >This is a link</a> --}}
                @csrf
                @method('DELETE')
                <button type ="submit" class="btn btn-danger">Delete</button>
            </form> 
         </td>
     </tr>
     @endforeach
 </table>
@endsection