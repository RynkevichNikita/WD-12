<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('register');
    }
    
    public function store(Request $request)
    {
        Mail::to($request->email)->queue(new WelcomeEmail());
        return 'ok';
    }
}
