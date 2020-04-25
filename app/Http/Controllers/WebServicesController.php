<?php

namespace App\Http\Controllers;

use App\Registration;
use App\Http\Requests\ValidApiRequest;
use App\Traits\DBTrait;

class WebServicesController extends Controller
{
    use DBTrait;


    public function store(ValidApiRequest $req)
    {
        $this->newUser($req);
        return response()->json([
            'status' => 1,
            'message' => 'Registration Successful!'
        ], 201);
    }
}
