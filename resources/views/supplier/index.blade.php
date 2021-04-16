@extends('layout')

@section('content')
@section('content_header')
Supplier
@endsection
@section('breadcrumb')
<a href="{{url('supplier/')}}">Supplier</a>
@endsection

{{-- <h2>View all suppliers</h2> --}}
        
{{-- 
@if($message = Session::get('success'))
<div class= "alert alert-success">
    <p>{{$message}}</p>
</div>
@endif  --}}

<div class="card">
    <div class="card-header">
        <h5 class="card-title">View all suppliers</h5>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Address line 1</th>
                <th>Address line 2</th>
                <th>Phone number</th>
                <th>Email</th>
                <th width="250px">Action</th>
            </tr>
       
            @foreach ($collection as $supplier)
            <tr>
                
                <td>{{ $supplier->f_name}}</td>
                <td>{{ $supplier->l_name}}</td>
                <td>{{ $supplier->ad_line1}}</td>
                <td>{{ $supplier->ad_line2}}</td>
                <td>{{ $supplier->phone_number}}</td>
                <td>{{ $supplier->email}}</td>
                <td> 
                   <form action= "{{route('supplier.destroy' , $supplier->id)}}"  method="POST"> 
                       <a class="btn btn-info" href="{{ route('supplier.show' ,$supplier->id)}}"> Show </a>
                       <a class="btn btn-primary" href="{{ route('supplier.edit' ,$supplier->id)}}"> Edit </a>
                 
                        @csrf
                       @method('DELETE')
                       <button type ="submit" class="btn btn-danger">Delete</button>
                   </form> 
                </td>
            </tr>
            @endforeach
        </table>
       
    </div>
</div>


@endsection