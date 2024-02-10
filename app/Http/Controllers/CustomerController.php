<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function show() {
        // $users = Customer::all();
 
        // foreach ($users as $user) {
        //     echo $user->customerName;
        // }
         
        $users = DB::table('customers')
            ->join('employees', 'customers.salesRepEmployeeNumber', '=', 'employees.employeeNumber')
            ->select('customers.customerName', 'employees.lastName')
            ->get();
        
        return dd($users);
    }
}
