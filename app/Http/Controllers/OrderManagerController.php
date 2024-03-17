<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use App\Models\Order;

class OrderManagerController extends Controller
{
    public function update(Request $request, Order $order)
    {
        Gate::authorize('update', $order);
 
        return 'Page where you can update your order';
    }

    public function delete(Request $request, Order $order)
    {
        Gate::authorize('delete', $order);
 
        return 'Page where you can delete your order';
    }

    public function create(Request $request)
    {
        Gate::authorize('create', Order::class);
 
        return 'Page where you can create your order';
    }
}
