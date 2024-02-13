<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function index() {
        return view('register');
    }

    public function store(RegisterRequest $request) {
        $validated = $request->validated();

        return 'Successfull registration';
    }
}
