<?php

namespace App\Observers;

use App\Models\Customer;
use Illuminate\Support\Facades\Log;

class CustomerObserver
{
    public function deleted(Customer $customer): void
    {
        Log::alert("User {id} was deleted", [
            'id' => $user->id
        ]);
    }
}
