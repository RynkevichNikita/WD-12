<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Payment extends Controller
{
    public function index() 
    {
        return 'Payments for plebs';
    }

    public function adminIndex() 
    {
        return 'Payments for admins';
    }
}
