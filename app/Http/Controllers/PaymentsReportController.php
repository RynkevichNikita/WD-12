<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendCustomerPaymentsReport;
use App\Models\Payment;

class PaymentsReportController extends Controller
{
    public function index()
    {
        $payments = Payment::all();
        $payments = $payments->unique('customerNumber');
        return view('paymentReport', [
            'customers' => $payments
        ]);
    }

    public function show(Request $request)
    {
        if ($request->customer == 'all') {
            $payments = Payment::all();
        } else {
            $payments = Payment::where('customerNumber', '=', $request->customer)->get();
        }
        SendCustomerPaymentsReport::dispatch($payments->toJson());
        return 'Progress is progressing!';
    }
}
