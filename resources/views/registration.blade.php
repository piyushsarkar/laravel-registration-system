@extends('layouts.layout')

@section('content')
<div class="container registration-form">
    <form id="registration-form" action="/api/register" method="POST">
        @csrf
        <h3>Registration Form</h3>
        <div id="success-msg"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label for="name" class="control-label">Name:</label>
                    <input type="text" id="name" name="name" class="form-control" onFocus="$('#err-name').text('')">
                    <span class="text-danger" id="err-name"></span>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Email:</label>
                    <input type="email" id="email" name="email" class="form-control" onFocus="$('#err-email').text('')">
                    <span class="text-danger" id="err-email"></span>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label">Pincode:</label>
                    <input type="text" id="pincode" name="pincode" class="form-control" maxlength="6" onFocus="$('#err-pincode').text('')">
                    <span class="text-danger" id="err-pincode"></span>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Submit</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection('content')