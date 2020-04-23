<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;



class ValidRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|min:2|max:50',
            'email' => 'required|email|unique:registrations',
            'pincode' => 'required|numeric|digits:6'
        ];
    }
    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'name.required' => 'Please fill your Name',
            'email.required' => 'Please fill your Email',
            'pincode.required' => 'Please fill your Pincode',
            'email.unique' => 'This email is already registered!',
            'name.min' => 'Name must be at least 2 characters.',
            'name.max' => 'Name should not be greater than 50 characters.',
            'pincode.numeric' => 'Please enter a valid pincode',
            'pincode.digits' => 'Pincode must be a 6 digit code'
        ];
    }
}
