<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function view () {
        return view('contact');
    }

    public function create (Request $request) {
        $validated = $request->validate([
            'name' => 'required|alpha:ascii',
            'email' => 'required|email:rfc,dns',
        ]);

        return 'Success';
    }
}
