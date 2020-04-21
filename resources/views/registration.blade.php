@extends('layouts.layout')

@section('content')
<div class="container registration-form">
    <form action="/" method="POST">
    @csrf
        <h3>Registration Form</h3>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @else
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name" class="control-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Pincode:</label>
                    <input type="text" id="pincode" name="pincode" class="form-control" maxlength="6" value="{{ old('pincode') }}">
                    @if ($errors->has('pincode'))
                        <span class="text-danger">{{ $errors->first('pincode') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Register</button>
                </div>
            @endif  
            </div>
        </div>
    </form>
</div>
@endsection('content')