@extends('layout')

    @section('content')

    @section('content_header')
Supplier create
@endsection
@section('breadcrumb')
<a href="{{url('supplier/')}}">Supplier</a> ▶ <a href="{{url('supplier/create')}}">Supplier </a>
@endsection
    <style>
        .validate{
            color: red;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> Create a supplier</h4>
            <hr>
            <p class="card-text">This is a sample model created only for demo, In this example you can learn how to use basic laravel validations</p>
            <form action="{{ route('supplier.store') }}" method="POST">
                @csrf
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="">First name</label>
                    <input type="text" class="form-control{{ $errors->has('f_name') ? ' is-invalid' : '' }}" id="" value="{{old('f_name')}}" name="f_name" >
                    @if ($errors->has('f_name'))
                        <div class="validate">
                            {{-- {{ $errors->first('f_name') }} --}}
                            {{-- or --}}
                            Please type first name.
                        </div>
                    @endif
                </div>
                <div class="col-md-4 mb-3">
                    <label for=""> Last name</label>
                    <input type="text" class="form-control{{ $errors->has('l_name') ? ' is-invalid' : '' }} "  value="{{old('l_name')}}" name="l_name">
                    @if ($errors->has('l_name'))
                    <div class="validate">
                        {{-- {{ $errors->first('l_name') }} --}}
                        {{-- or --}}
                        Please type last name.
                    </div>
                @endif
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="">Address line 1</label>
                    <input type="text" class="form-control {{ $errors->has('ad_line1') ? ' is-invalid' : '' }} " value="{{old('ad_line1')}}" name="ad_line1">
                    @if ($errors->has('ad_line1'))
                    <div class="validate">
                        {{-- {{ $errors->first('ad_line1') }} --}}
                        {{-- or --}}
                        Please type address line 1.
                    </div>
                @endif
                    
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Address line 2</label>
                    <input type="text" class="form-control {{ $errors->has('ad_line2') ? ' is-invalid' : '' }} "  value="{{old('ad_line2')}}" name="ad_line2">
                    @if ($errors->has('ad_line2'))
                    <div class="validate">
                        {{-- {{ $errors->first('ad_line2') }} --}}
                        {{-- or --}}
                        Please type address line 2.
                    </div>
                @endif
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="">Phone</label>
                    <input type="text" class="form-control {{ $errors->has('phone_number') ? ' is-invalid' : '' }} " id="" value="{{old('phone_number')}}" name="phone_number">
                    @if ($errors->has('phone_number'))
                    <div class="validate">
                        {{-- {{ $errors->first('phone_number') }} --}}
                        {{-- or --}}
                        Please type Phone number.
                    </div>
                @endif
                    
                </div>
                <div class="col-md-4 mb-3">
                    <label for="">Email</label>
                    <input type="text" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }} "  value="{{old('email')}}" name="email">
                    @if ($errors->has('email'))
                    <div class="validate">
                        {{-- {{ $errors->first('email') }}
                        or --}}
                        Please type frist name
                    </div>
                @endif
                </div>
    
            </div>
        <input type="submit" value="Save" class="btn btn-primary"> <input type="reset" value="Clear" class="btn btn-warning">
        </form>
        </div>
    </div>
    <br>
    @endsection

    