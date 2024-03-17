<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        $loginUserData = $request->validate([
            'customerNumber'=> ['required', 'exists:customers,customerNumber'],
            'contactLastName'=> ['required', 'exists:customers,contactLastName']
        ]);
        $user = Customer::where('customerNumber', $loginUserData['customerNumber'])->first();
        if(!$user) {
            return response()->json([
                'message' => 'Invalid Credentials'
            ],401);
        }
        $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
        return response()->json([
            'access_token' => $token,
        ]);
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
    
        return response()->json([
          "message"=>"logged out"
        ]);
    }
}
