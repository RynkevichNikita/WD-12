<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function show () 
    {
        return Payment::where('paymentDate', '>=', '2004-01-01')->get();
    }
}
