<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class CustomerUpdateRequest extends FormRequest
{    
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'customerNumber' => ['exists:customers'],
            'contactLastName' => ['string'],
            'contactFirstName' => ['string'],
            'phone' => ['regex:/^(\+?[\d\(\)\-\s\.])+$/'],
            'postalCode' => ['string']
        ];
    }

    protected function failedValidation(Validator $validator) 
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422)); 
    }
}
