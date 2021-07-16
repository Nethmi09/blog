
@extends('layout.layout')
@section('content')
<body>


    <!-- Main Content -->
    
        <div class="row">
            <div class="col-md-12">
                <div class="mt-3 mb-3">
                    <h2>Create new blog</h2>

                    @if ($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                      <li> {{$error}}</li> 
                    @endforeach
                    </div>
                    
                    @endif
                    <div class="card">
                        <div class="card-header">
                    
                           <h3> <span><i class="fas fa-address-card"></i></span> This is the card </h3>   
                        </div>
                        <div class="card-body">
                            <form action= "{{route('blogs.store')}}"  method="POST">
                                @csrf
                                 <div class="form-group" >
                                     <button class="btn btn-primary btn-sm"> Back</button>
                                 </div>
                                 <div class="row"> 
                                 <div class="form-group col-6">
                                     <lable for="create-form-textarea"><B>Title:</B></lable><br>
                                  <input class="form-control" type="text" name="title" id="" value="{{old('title')}}">
                                 </div>
                                 <div class="form-group col-6">
                                     <lable for="create-form-textarea"><B>Title:</B></lable><br>
                                  <input class="form-control" type="text" name="title" id="" value="{{old('title')}}">
                                 </div>
                                 {{-- <div class="form-group col-4">
                                     <lable for="create-form-textarea"><B>Title:</B></lable><br>
                                  <input class="form-control" type="text" name="title" id="" value="{{old('title')}}">
                                 </div> --}}
                                 <div class="form-group">
                                     <lable for="create-form-textarea"><B>Description:</B></lable><br>
                                     <textarea class="form-control" name="body" id="" cols="150" rows="10" >{{old('body')}}</textarea><br>
                                 </div>
                             </div>
                                 <div class="d-grid gap-2 col-1 mx-auto">
                                     <button type="submit" class="btn btn-primary btn-sm "> Submit</button>
                                 </div>
                             </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
   

    <!-- Footer -->
   
</body>
@endsection
