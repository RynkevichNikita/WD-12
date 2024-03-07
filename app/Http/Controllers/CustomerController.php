<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerUpdateRequest;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function update(CustomerUpdateRequest $request) 
    {
        Customer::where('customerNumber', '=', $request['customerNumber'])
            ->update($request->only(['contactLastName', 'contactFirstName', 'phone', 'postalCode']));

        return 'Success';
    }
}
