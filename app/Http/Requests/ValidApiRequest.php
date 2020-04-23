<?php

namespace App\Http\Requests;

use App\Http\Requests\ValidRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Exceptions\HttpResponseException;

class ValidApiRequest extends ValidRequest
{
    protected function failedValidation(Validator $validator)
    {
        $errors = (new ValidationException($validator))->errors();

        throw new HttpResponseException(
            response()->json([
                'status' => 0,
                'error' => $errors
            ], 422)
        );
    }
}
