<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('layouts.reglog.login');
    }    
    
    public function login(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'exists:users'],
            'password' => ['required']
        ]);
        $user = User::where('name', '=', $request->name)->first();
        if (Hash::check($request->password, $user->password)) {
            return 'You are in!';
        } else {
            return 'Password is incorrect';
        }
    }
}
