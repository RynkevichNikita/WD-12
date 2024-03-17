<?php

namespace App\Policies;

use App\Models\Customer;
use App\Models\Order;
use Illuminate\Auth\Access\Response;

class OrderPolicy
{
    /**
     * Determine whether the user can create models.
     */
    public function create(Customer $customer)
    {
        return $customer->creditLimit < 10000
                    ? Response::allow()
                    : Response::deny('I am sorry, your credit limit is too low');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(Customer $customer, Order $order)
    {
        return $customer->country === 'USA'
                    ? Response::allow()
                    : Response::deny('Only customers from USA can do it');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(Customer $customer, Order $order)
    {
        return $customer->country === 'USA'
                    ? Response::allow()
                    : Response::deny('Only customers from USA can do it');
    }
}
