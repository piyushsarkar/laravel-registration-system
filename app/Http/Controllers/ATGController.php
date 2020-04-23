<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidRequest;
use App\Traits\DBTrait;

class ATGController extends Controller
{
    use DBTrait;

    public function create()
    {
        return view('registration');
    }
    public function store(ValidRequest $req)
    {
        $this->newUser($req);

        return redirect('/')->with('success', 'Registration Successful!');
    }
}
