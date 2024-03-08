<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LoginAdminController extends Controller
{
    public function index()
    {
        return view('login');
    }
    
    public function role(Request $request)
    {
        if (isset($request->role) && $request->role == 'admin') {
            $request->session()->put('Secret', 'secret');

        }

        return view('loginTransfer');
    }
}
