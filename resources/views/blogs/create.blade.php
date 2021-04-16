<!DOCTYPE html>

<head>
    <title>Blog</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Styles -->
    <style>
        .header,
        .footer {
            background-color: #E6E6E6;
            height: 200px;
        }
    </style>
</head>

<body>

    <header>
        <div class="jumbotron text-center">

            <h1>Laravel CRUD Tutorial </h1>
            <p>By: Nethmi Udara</p>
        </div>
    </header>


    <!-- Main Content -->
    <main class="container">
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
                    <form action= "{{route('blogs.store')}}"  method="POST">
                       @csrf
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm"> Back</button>
                        </div>
                        <div class="form-group">
                            <lable for="create-form-textarea"><B>Title:</B></lable><br>
                         <input type="text" name="title" id="" value="{{old('title')}}">
                        </div>
                        <div class="form-group">
                            <lable for="create-form-textarea"><B>Description:</B></lable><br>
                            <textarea name="body" id="" cols="150" rows="10" >{{old('body')}}</textarea><br>
                        </div>
                        <div class="d-grid gap-2 col-1 mx-auto">
                            <button type="submit" class="btn btn-primary btn-sm "> Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer>
        <div class="container-flex">
            <div class="col-lg-12 d-flex align-items-center justify-content-center footer">
                <h1>Footer section</h1>
            </div>
        </div>
    </footer>
</body>