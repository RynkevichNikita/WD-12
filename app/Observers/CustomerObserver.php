<?php

namespace App\Observers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Payment;

class CustomerObserver
{
    public function deleting(Customer $customer): void
    {
        $customerNumber = $customer->customerNumber;
        OrderDetail::whereHas('order', function ($query) use($customerNumber) {
            $query->where('customerNumber', $customerNumber);
        })->delete();
        Order::where('customerNumber', $customerNumber)->delete();
        Payment::where('customerNumber', $customerNumber)->delete();
    }
}
