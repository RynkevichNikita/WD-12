<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    public function create()
    {
        Customer::create([
            'customerNumber' => 5,
            'customerName' => 'asd',
            'contactLastName' => 'dsa',
            'contactFirstName' => 'sda',
            'phone' => 123,
            'addressLine1' => 'asd',
            'addressLine2' => 'asd',
            'city' => 'asd',
            'state' => 'asd',
            'postalCode' => 3,
            'country' => 'asd',
            'creditLimit' => 321
        ]);
    }

    public function delete($id)
    {
        // $customer = Customer::destroy($id);

        // $customer = DB::table('customers')
        //             ->join('payments', 'customers.customerNumber', '=', 'payments.customerNumber')
        //             ->join('orders', 'customers.customerNumber', '=', 'orders.customerNumber')
        //             ->join('orderdetails', 'orders.orderNumber', '=', 'orderdetails.orderNumber')
        //             ->where('customers.customerNumber', '=', $id)
        //             ->delete();

        $customer = DB::statement('delete `customers`, `payments`, `orders`, `orderdetails` from `customers` 
                    inner join `payments` 
                        on `customers`.`customerNumber` = `payments`.`customerNumber` 
                    inner join `orders` 
                        on `customers`.`customerNumber` = `orders`.`customerNumber` 
                    inner join `orderdetails` 
                        on `orders`.`orderNumber` = `orderdetails`.`orderNumber` 
                    where `customers`.`customerNumber` = 112');
    }
}
