<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registration;

class ATGController extends Controller
{
    public function create() {
        return view('registration');
    }
    public function store() {
        
        $rules =[
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|unique:registrations',
            'pincode' => 'required|numeric|digits:6'           
        ];
        $customMessages =  [
            'name.required' => 'Please fill your Name',
            'email.required' => 'Please fill your Email',
            'pincode.required' => 'Please fill your Pincode',
            'email.unique' => 'This email is already registerd!',
            'name.min' => 'Name must be at least 2 characters.',
            'name.max' => 'Name should not be greater than 50 characters.',
            'pincode.numeric' => 'Please enter a valid pincode',
            'pincode.digits' => 'Pincode must be a 6 digit code'
        ];

        request()->validate($rules, $customMessages);


        // error_log(request('name'));
        $register = new Registration(); //new instance of model

        $register->name = request('name');
        $register->email = request('email');
        $register->pincode = request('pincode');

        $register->save();
        
        return redirect('/')->with('success', 'Registration Successful!');
    }

    
}
