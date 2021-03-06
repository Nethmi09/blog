@extends('layout.layout')

@section('content')


<div class ="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit blog</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('blogs.index')}}"> Back </a>
        </div>
    </div>
</div>
 

<form action= "{{route('blogs.update' ,$blog->id)}}" method="POST">
    @csrf
    @method('PUT')

<div class ="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title:</strong>
          <input type="text" name="title" value="{{$blog->title}}" class="form-control" placeholder="Title">
        </div>
   </div>
    
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Description:</strong>
            <textarea class="form-control" style="height:150px" name="body" placeholder="Description"> {{$blog->body}} </textarea>
        </div>
    </div>
    <div class = "col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary"> Submit</button>
</div>
</div>
</form>


@endsection